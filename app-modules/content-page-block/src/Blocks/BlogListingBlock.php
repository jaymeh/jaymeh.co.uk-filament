<?php

namespace Jaymeh\ContentPageBlock\Blocks;

use Filament\Forms\Components\TextInput;
use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;

class BlogListingBlock extends PageBlockAbstract {
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
    protected $view = '';

    /**
     * {@inheritdoc}
     */
    protected function fields() {
        return [
            TextInput::make('title')
        ];
    }
}
