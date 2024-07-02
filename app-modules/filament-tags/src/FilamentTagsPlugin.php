<?php

namespace Jaymeh\FilamentTags;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Jaymeh\FilamentTags\Resources\TagResource;

class FilamentTagsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'tags';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                TagResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
