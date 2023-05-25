<?php

declare(strict_types=1);

namespace WayOfDev\EventSourcing\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use WayOfDev\EventSourcing\Bridge\Laravel\Providers\EventSourcingServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            EventSourcingServiceProvider::class,
        ];
    }
}
