<?php

namespace Jaymeh\ContentPageBlocks\Blocks;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Collection;
use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;
use Jaymeh\Posts\Repositories\PostRepository;

class CategoryBlock extends PageBlockAbstract
{
    /**
     * Label of the Page Block.
     *
     * @var string
     */
    protected $label = 'Category Block';

    /**
     * Name of the page block.
     *
     * @var string
     */
    protected $name = 'category_block';

    /**
     * Blade view associated with the Page Block.
     *
     * @var string
     */
    protected $view = 'page-blocks::blocks.categories-block';

    /**
     * {@inheritdoc}
     */
    protected function fields()
    {
        return [
            TextInput::make('title'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function attributes(array $attributes): array {
        $attributes['categories'] = $this->getCategories($attributes);

        return $attributes;
    }

    /**
     * Gets the posts to associate with the block.
     *
     * @param array $attributes
     *
     * @return Collection
     */
    private function getCategories(array $attributes): Collection
    {
        $tagClass = config('tags.tag_model');

        return $tagClass::whereHas('posts')
            ->withCount('posts')->get();
    }
}
