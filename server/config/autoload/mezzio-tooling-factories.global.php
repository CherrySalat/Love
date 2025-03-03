<?php

/**
 * This file generated by Mezzio\Tooling\Factory\ConfigInjector.
 *
 * Modifications should be kept at a minimum, and restricted to adding or
 * removing factory definitions; other dependency types may be overwritten
 * when regenerating this file via mezzio-tooling commands.
 */
 
declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            App\Handler\CompatibilityCheckHandler::class => App\Handler\CompatibilityCheckHandlerFactory::class,
            App\Handler\CompatibilityMatchHandler::class => App\Handler\CompatibilityMatchHandlerFactory::class,
            App\Middleware\CorsMiddleware::class => App\Middleware\CorsMiddlewareFactory::class,
            App\WeddingDataValidationMiddleware::class => App\WeddingDataValidationMiddlewareFactory::class,
        ],
    ],
];
