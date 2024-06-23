<?php

namespace Jaymeh\Tags\Repositories;

use Creode\LaravelRepository\BaseRepository;

class TagRepository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function getModel(): string
    {
        return config('tags.model', Spatie\Tags\Tag::class);
    }
}
