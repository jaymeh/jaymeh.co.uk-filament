<?php

namespace Jaymeh\ContentPageBlocks\Blocks;

use Filament\Forms\Get;
use Jaymeh\Posts\Models\Post;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Collection;
use Jaymeh\Posts\Repositories\PostRepository;
use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;

class BlogListingBlock extends PageBlockAbstract
{
    /**
     * Label of the Page Block.
     *
     * @var string
     */
    protected $label = 'Blog Listing Block';

    /**
     * Name of the page block.
     *
     * @var string
     */
    protected $name = 'blog_listing_block';

    /**
     * Any fields associated with the Page Block.
     *
     * @var array
     */
    protected $fields = [];

    /**
     * Blade view associated with the Page Block.
     *
     * @var string
     */
    protected $view = 'content-page-blocks::blocks.blog-listing-block';

    /**
     * {@inheritdoc}
     */
    protected function fields()
    {
        return [
            TextInput::make('title'),
            Toggle::make('paginate')
                ->reactive(),
            TextInput::make('per_page')
                ->hidden(
                    function (Get $get) {
                        return $get('paginate') === false;
                    }
                )
                ->requiredIf('paginate', true),
            TextInput::make('amount_of_posts')
                ->requiredIf('paginate', false)
                ->hidden(
                    function (Get $get) {
                        return $get('paginate') === true;
                    }
                ),
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function attributes(array $attributes): array {
        $attributes['posts'] = $this->getPosts($attributes);

        return $attributes;
    }

    /**
     * Gets the posts to associate with the block.
     *
     * @param array $attributes
     *
     * @return Collection
     */
    private function getPosts(array $attributes): Collection
    {
        $posts = [];

        $postRepository = resolve(PostRepository::class);

        if ($attributes['paginate']) {
            $posts = $postRepository->paginate($attributes['per_page']);
        } else {
            $posts = $postRepository->limit($attributes['amount_of_posts'])->get();
        }

        return $posts;
    }
}
