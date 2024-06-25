<?php

namespace Jaymeh\ContentPageBlocks\Blocks;

use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Collection;
use Jaymeh\Posts\Repositories\PostRepository;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;

class HeaderBannerBlock extends PageBlockAbstract
{
    /**
     * Label of the Page Block.
     *
     * @var string
     */
    protected $label = 'Header Banner Block';

    /**
     * Name of the page block.
     *
     * @var string
     */
    protected $name = 'header_banner_block';

    /**
     * Blade view associated with the Page Block.
     *
     * @var string
     */
    protected $view = 'page-blocks::blocks.header-banner-block';

    /**
     * {@inheritdoc}
     */
    protected function fields()
    {
        return [
            CuratorPicker::make('image_id')
                ->disk('public'),
            TextInput::make('title')
                ->required(),
            TextInput::make('subtitle'),
            TextInput::make('link_url'),
            TextInput::make('link_text'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function attributes($attributes): array
    {
        $media = app(Media::class)::where('id', $attributes['image_id'])->first();
        $attributes['image_url'] = $media->url;

        return $attributes;
    }
}
