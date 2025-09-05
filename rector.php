<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/examples',
    ])
    // uncomment to reach your current PHP version
     ->withPhpSets(php82: true)
    ->withRules([
        AddVoidReturnTypeWhereNoReturnRector::class,
    ]);
