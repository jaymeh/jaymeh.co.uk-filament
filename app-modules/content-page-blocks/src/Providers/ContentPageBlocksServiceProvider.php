<?php

namespace Jaymeh\ContentPageBlocks\Providers;

use Illuminate\Support\ServiceProvider;
use Jaymeh\ContentPageBlocks\Blocks\BlogListingBlock;
use Jaymeh\ContentPageBlocks\Blocks\HeaderBannerBlock;

class ContentPageBlocksServiceProvider extends ServiceProvider
{
    /**
     * Sets the namespace of the views.
     *
     * @var string
     */
    public static string $viewNamespace = 'page-blocks';

    public function register(): void
    {
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', static::$viewNamespace);

        $this->publishes(
            [
                __DIR__.'/../../resources/views' => resource_path('views/vendor/' . static::$viewNamespace),
            ],
            [
                'content-page-blocks',
                'content-page-blocks-views'
            ]
        );

        new BlogListingBlock();
        new HeaderBannerBlock();
    }
}
