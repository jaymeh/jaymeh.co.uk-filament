<?php

namespace App\Models;

use Jaymeh\Posts\Repositories\PostRepository;
use Spatie\Tags\Tag;

class ExtendedTag extends Tag
{
    protected $table = 'tags';

    public function posts() {
        $postClass = resolve(PostRepository::class)->getModel();
        return $this->morphedByMany(
            $postClass,
            'taggable',
            'taggables',
            'tag_id',
            'taggable_id',
            'id',
            'id'
        );
    }
}
