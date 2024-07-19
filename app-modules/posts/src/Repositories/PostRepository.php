<?php

namespace Jaymeh\Posts\Repositories;

use Jaymeh\Posts\Models\Post;
use Creode\LaravelRepository\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class PostRepository extends BaseRepository
{
    /**
     * Gets all posts by tag.
     *
     * @param string $tag
     * @return Collection
     */
    public function getPostsByTag(string $tag): Collection
    {
        return $this->whereHas('tags', function ($query) use ($tag) {
            // TODO: Make my language more dynamic.
            $query->where('slug->en', $tag);
        })->get();
    }

    /**
     * {@inheritdoc}
     */
    protected function getModel(): string
    {
        return config('posts.model', Post::class);
    }
}
