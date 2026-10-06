<?php

declare(strict_types=1);

// lib/Client is generated. The finder must not restyle it.
$finder = (new PhpCsFixer\Finder())
    ->in([__DIR__ . '/lib', __DIR__ . '/test'])
    ->exclude('Client');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@PhpCsFixer' => true,
        'php_unit_internal_class' => false,
        'php_unit_test_class_requires_covers' => false,
    ])
    ->setFinder($finder);
