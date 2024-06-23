<?php

namespace Jaymeh\ContentPageBlock\Providers;

use Illuminate\Support\ServiceProvider;
use Jaymeh\ContentPageBlock\Blocks\BlogListingBlock;

class ContentPageBlockServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        new BlogListingBlock();
    }
}
