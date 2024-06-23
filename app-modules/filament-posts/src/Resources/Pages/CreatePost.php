<?php

namespace Jaymeh\FilamentPosts\Resources\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Jaymeh\FilamentPosts\Resources\PostResource;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
