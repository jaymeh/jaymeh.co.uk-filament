<?php

namespace Jaymeh\FilamentTags\Resources\TagResource\Pages;

use Jaymeh\FilamentTags\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTag extends CreateRecord
{
    protected static string $resource = TagResource::class;
}
