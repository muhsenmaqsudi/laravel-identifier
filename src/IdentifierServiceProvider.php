<?php

namespace Muhsenmaqsudi\Identifier;

use Illuminate\Support\ServiceProvider;
use Muhsenmaqsudi\Identifier\Commands\IdentifierCommand;

class IdentifierServiceProvider extends ServiceProvider
{
    private string $name = 'laravel-identifier';

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-identifier.php', $this->name);
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                IdentifierCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../config/laravel-identifier.php' => config_path('laravel-identifier.php'),
        ], 'laravel-identifier-config');
    }
}
