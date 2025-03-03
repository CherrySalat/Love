<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Container\ContainerInterface;

class CompatibilityCheckHandlerFactory
{
    public function __invoke(ContainerInterface $container): CompatibilityCheckHandler
    {
        return new CompatibilityCheckHandler();
    }
}
