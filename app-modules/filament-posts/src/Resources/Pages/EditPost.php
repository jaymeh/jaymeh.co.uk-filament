<?php

namespace Jaymeh\FilamentPosts\Resources\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Jaymeh\FilamentPosts\Resources\PostResource;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
