<?php

namespace ShapeDiver\GeometryApiV2;

use ShapeDiver\GeometryApiV2\Client\Configuration;
use ShapeDiver\GeometryApiV2\SdClient;

class SdConfig extends Configuration
{
    /**
     * @var SdConfig
     */
    private static $defaultConfiguration;

    public function __construct()
    {
        parent::__construct();
        $this->userAgent = "sd-sdk/php/" . SdClient::SDK_VERSION;
    }

    #[\Override]
    public static function getDefaultConfiguration(): SdConfig
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new SdConfig();
        }

        return self::$defaultConfiguration;
    }

    #[\Override]
    public static function setDefaultConfiguration(Configuration $config): void
    {
        self::$defaultConfiguration = self::fromConfiguration($config);
    }

    public static function fromConfiguration(Configuration $configuration): SdConfig
    {
        // Copy config properties except for user-agent.
        $config = new SdConfig();
        $config->apiKeys = $configuration->apiKeys;
        $config->apiKeyPrefixes = $configuration->apiKeyPrefixes;
        $config->accessToken = $configuration->accessToken;
        $config->booleanFormatForQueryString = $configuration->booleanFormatForQueryString;
        $config->username = $configuration->username;
        $config->password = $configuration->password;
        $config->host = $configuration->host;
        $config->debug = $configuration->debug;
        $config->debugFile = $configuration->debugFile;
        $config->tempFolderPath = $configuration->tempFolderPath;

        return $config;
    }
}
