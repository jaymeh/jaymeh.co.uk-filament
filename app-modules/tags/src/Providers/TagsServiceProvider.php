<?php

namespace Jaymeh\Tags\Providers;

use Illuminate\Support\ServiceProvider;

class TagsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/tags.php', 'tags'
        );
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishesMigrations([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ]);

        $this->publishes([
            __DIR__.'/../../config/tags.php' => config_path('tags.php'),
        ]);
    }
}
