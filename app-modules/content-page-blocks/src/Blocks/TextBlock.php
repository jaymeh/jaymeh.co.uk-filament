<?php

namespace Jaymeh\ContentPageBlocks\Blocks;

use Filament\Forms\Components\MarkdownEditor;
use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;

class TextBlock extends PageBlockAbstract
{
    /**
     * Label of the Page Block.
     *
     * @var string
     */
    protected $label = 'Text Block';

    /**
     * Name of the page block.
     *
     * @var string
     */
    protected $name = 'text_block';

    /**
     * Blade view associated with the Page Block.
     *
     * @var string
     */
    protected $view = 'page-blocks::blocks.text-block';

    /**
     * {@inheritdoc}
     */
    protected function fields()
    {
        return [
            MarkdownEditor::make('content'),
        ];
    }
}
