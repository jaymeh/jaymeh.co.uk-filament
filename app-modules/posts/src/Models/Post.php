<?php

namespace Jaymeh\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PawelMysior\Publishable\Publishable;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory, HasTags, Publishable;

    protected $fillable = [
        'title',
        'slug',
        'meta_description',
        'featured_post',
        'content',
        'excerpt',
        'featured_image',
        'published_at',
    ];
}
