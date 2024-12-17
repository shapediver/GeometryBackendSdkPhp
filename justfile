set shell := ["bash", "-uc"]

remote_url := "https://raw.githubusercontent.com/shapediver/OpenApiSpecifications"
remote_tag_prefix := "gb_v2"
remote_file_name := "geometry_backend_v2.yaml"

spec_file := "oas_spec.yaml"
target_dir := "./out"

# Path of the local OAS repository.
oas_repo := "../OpenApiSpecifications/"

default: setup

# Installs the package and its dependencies.
setup:
    php -r 'if (!preg_match("/^8\.2\./", phpversion())) { exit(1); }' # PHP 8.2
    composer install

# Removes dependencies.
reset:
    rm -rf './vendor'

# Run all PHP tests.
[no-exit-message]
test:
    vendor/bin/phpunit ./test/

# Updates the SDK version - currently no actual release!
release version:
    # Stop when repo is dirty
    test -z "$(git diff --shortstat)"

    # Update sdk version number.
    case $(uname -s) in \
    Linux) sed -i 's/SDK_VERSION = ".*"/SDK_VERSION = "{{version}}"/' "./lib/SdClient.php" ;; \
    Darwin) sed -i '' 's/SDK_VERSION = ".*"/SDK_VERSION = "{{version}}"/' "./lib/SdClient.php" ;; \
    *) exit 1 ;; \
    esac

    # Commit and tag.
    git add -A .
    git commit -m "Publish v{{version}}"
    git tag -a "v{{version}}" -m "Publish v{{version}}"

    # Pushing branch main and tag v{{version}} to Git
    git push --atomic origin v{{version}} main

# Generate the PHP client from the OpenAPI specification.
generate version:
    # Ensure that the required tools are installed.
    command -v openapi-generator-cli
    command -v jq

    # Stop when repo is dirty
    test -z "$(git diff --shortstat)"

    # Either link local file or fetch the requested version of the specification.
    if [ "{{version}}" == "local" ]; then \
        \cp "{{oas_repo}}/geometry_backend_v2.yaml" "{{spec_file}}" ; \
    else \
        curl -f \
          "{{remote_url}}/{{remote_tag_prefix}}%40{{version}}/{{remote_file_name}}" \
          -o "{{spec_file}}" ; \
    fi

    # Generate the PHP client.
    mkdir -p "{{target_dir}}"
    openapi-generator-cli generate \
        --invoker-package "ShapeDiver\\\GeometryApiV2\\\Client" \
        --additional-properties=\
            disallowAdditionalPropertiesIfNotPresent=false,\
            legacyDiscriminatorBehavior=false,\
            modern=true,\
            variableNamingConvention=camelCase \
        -i "{{spec_file}}" \
        -g php \
        -o "{{target_dir}}" || { \
            rm -rf "{{target_dir}}"; \
            exit 1; \
        }

    # Replace old client with new one.
    rm -rf "lib/Client/" || :
    cp -r "{{target_dir}}/lib/" "lib/Client/"

    just _update-deps

    # Clean up.
    rm -rf "{{target_dir}}"

    # Commit changes.
    if [ "{{version}}" != "local" ]; then \
        git add -A . ; \
        git commit -m "Generate spec version {{version}}" ; \
    fi

# Tests the Python client generation with the current version of the checked out OAS repo.
test-generator:
    openapi-generator-cli generate \
        --invoker-package "ShapeDiver\\\GeometryApiV2\\\Client" \
        --additional-properties=\
            disallowAdditionalPropertiesIfNotPresent=false,\
            legacyDiscriminatorBehavior=false,\
            modern=true,\
            variableNamingConvention=camelCase \
        --dry-run \
        -i "{{oas_repo}}/geometry_backend_v2.yaml" \
        -g php

# Updates dependencies.
_update-deps:
    #!/usr/bin/env bash
    src="{{target_dir}}/composer.json"
    dist="composer.json"

    # Merge the properties.
    jq -s \
      --arg 'a1' 'require' \
      --arg 'a2' 'require-dev' \
      '.[0] * .[1] | {($a1): .[$a1], ($a2): .[$a2] }' \
      "$src" \
      "$dist" \
      > "${src}.tmp"

    # Merge the remaining properties with the merged properties.
    jq -s '.[0] * .[1]' "$dist" "${src}.tmp" > "${dist}.tmp"

    # Update the dist file.
    mv "${dist}.tmp" "$dist"
