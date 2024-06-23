<?php

namespace Jaymeh\FilamentPosts;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Jaymeh\FilamentPosts\Resources\PostResource;

class FilamentPostsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'posts';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                PostResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
