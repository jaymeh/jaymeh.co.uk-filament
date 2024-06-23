<?php

namespace Jaymeh\Posts\Providers;

use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/posts.php', 'posts'
        );
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->publishesMigrations([
            __DIR__.'/../../database/migrations' => database_path('migrations'),
        ]);

        $this->publishes([
            __DIR__.'/../../config/posts.php' => config_path('posts.php'),
        ]);
    }
}
