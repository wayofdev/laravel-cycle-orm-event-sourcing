<?php

declare(strict_types=1);

namespace WayOfDev\EventSourcing\Bridge\Laravel\Providers;

use Illuminate\Support\ServiceProvider;

final class EventSourcingServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../../../config/event-sourcing.php' => config_path('event-sourcing.php'),
            ], 'config');

            $this->registerConsoleCommands();
        }
    }

    private function registerConsoleCommands(): void
    {
        $this->commands([]);
    }
}
