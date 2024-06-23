<?php

namespace Jaymeh\Posts\Repositories;

use Creode\LaravelRepository\BaseRepository;

class PostRepository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function getModel(): string
    {
        return config('posts.model', Jaymeh\Posts\Models\Post::class);
    }
}
