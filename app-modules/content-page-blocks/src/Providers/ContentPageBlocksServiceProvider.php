<?php

namespace Jaymeh\ContentPageBlocks\Providers;

use Illuminate\Support\ServiceProvider;
use Jaymeh\ContentPageBlocks\Blocks\BlogListingBlock;

class ContentPageBlocksServiceProvider extends ServiceProvider
{
    /**
     * Sets the namespace of the views.
     *
     * @var string
     */
    public static string $viewNamespace = 'content-page-blocks';

    public function register(): void
    {
        new BlogListingBlock();
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', static::$viewNamespace);
    }
}
