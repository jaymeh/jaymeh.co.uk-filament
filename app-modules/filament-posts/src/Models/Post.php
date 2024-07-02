<?php

namespace Jaymeh\FilamentPosts\Models;

use Awcodes\Curator\Models\Media;
use Jaymeh\Posts\Models\Post as BasePost;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends BasePost
{
    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id', 'id');
    }
}
