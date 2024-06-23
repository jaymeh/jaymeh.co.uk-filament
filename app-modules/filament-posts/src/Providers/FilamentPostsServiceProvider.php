<?php

namespace Jaymeh\FilamentPosts\Providers;

use Illuminate\Support\ServiceProvider;

class FilamentPostsServiceProvider extends ServiceProvider
{
    public static $viewsNamespace = 'filament-posts';

	public function register(): void
	{
	}

	public function boot(): void
	{
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishesMigrations([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ], ['filament-posts', 'filament-posts-migrations']);

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views',
            static::$viewsNamespace
        );

        $this->publishes(
            [
                __DIR__.'/../../resources/views' => resource_path('views/vendor/' . static::$viewsNamespace),
            ],
            [
                'filament-posts',
                'filament-posts-views'
            ]
        );
    }
}
