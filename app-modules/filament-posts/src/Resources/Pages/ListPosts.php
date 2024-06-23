<?php

namespace Jaymeh\FilamentPosts\Resources\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Jaymeh\FilamentPosts\Resources\PostResource;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
