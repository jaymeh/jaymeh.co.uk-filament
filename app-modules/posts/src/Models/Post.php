<?php

namespace Jaymeh\Posts\Models;

use Spatie\Tags\HasTags;
use Jaymeh\Posts\Models\ExtendedTag;
use Illuminate\Database\Eloquent\Model;
use PawelMysior\Publishable\Publishable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function getTagClassName(): string
    {
        return config('tags.tag_model', ExtendedTag::class);
    }

    public function tags(): MorphToMany
    {
        return $this
            ->morphToMany(self::getTagClassName(), 'taggable', 'taggables', null, 'tag_id')
            ->orderBy('order_column');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(config('posts.user_model'), 'author_id', 'id');
    }
}
