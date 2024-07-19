<?php

namespace Jaymeh\Posts\Providers;

use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider
{
    protected $moduleName = 'posts';

    public static string $viewNamespace = 'posts-module';

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/' . $this->moduleName . '.php', $this->moduleName
        );

        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Handles bootstrapping of the module.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerViews();

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');


        $this->publishesMigrations(
            [
                __DIR__.'/../../database/migrations' => database_path('migrations'),
            ]
        );

        $this->publishes(
            [
                __DIR__.'/../../config/' . $this->moduleName . '.php' => config_path(
                    $this->moduleName . '.php'
                ),
            ]
        );
    }

    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', static::$viewNamespace);
        $this->publishes(
            [
                __DIR__.'/../../resources/views' => resource_path('views/vendor/' . static::$viewNamespace),
            ],
            ['posts-views']
        );
    }
}
