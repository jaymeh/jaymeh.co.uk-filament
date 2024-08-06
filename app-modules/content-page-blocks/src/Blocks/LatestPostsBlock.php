<?php

namespace Jaymeh\ContentPageBlocks\Blocks;

use Filament\Forms\Components\TextInput;
use Jaymeh\Posts\Repositories\PostRepository;
use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;

class LatestPostsBlock extends PageBlockAbstract
{
    /**
     * Label of the Page Block.
     *
     * @var string
     */
    protected $label = 'Latest Posts Block';

    /**
     * Name of the page block.
     *
     * @var string
     */
    protected $name = 'latest_posts_block';

    /**
     * Blade view associated with the Page Block.
     *
     * @var string
     */
    protected $view = 'page-blocks::blocks.latest-posts';

    /**
     * {@inheritdoc}
     */
    protected function fields()
    {
        return [
            TextInput::make('title'),
            TextInput::make('amount_of_posts'),
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
     * @return mixed
     */
    private function getPosts(array $attributes)
    {
        $postRepository = resolve(PostRepository::class);

        return $postRepository->orderByDesc('published_at')
            ->limit(
                !empty($attributes['amount_of_posts']) ? intval($attributes['amount_of_posts']) : 5
            )
            ->get();
    }
}
