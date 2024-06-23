<?php

namespace Jaymeh\FilamentPosts\Resources;

use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Jaymeh\Posts\Models\Post;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Jaymeh\FilamentPosts\Resources\Pages;
use Filament\Forms\Components\MarkdownEditor;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function getModel(): string
    {
        return config('posts.model', static::$model);
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make([
                'default' => 1,
                'sm' => 2,
                'md' => 3,
                'lg' => 4,
                'xl' => 6,
                '2xl' => 8,
            ])
                ->schema([
                    Tabs::make('tabs')
                        ->tabs([
                            Tab::make('General')
                                ->schema([
                                    TextInput::make('title')
                                        ->live()
                                        ->required()
                                        ->rules('max:255')
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(function (Get $get, Set $set, $state, ?Model $record) {
                                            if (! $get('slug') && (! $record || ! $record->isPublished())) {
                                                $set('slug', Str::slug($state));
                                            }
                                        }),
                                    Textarea::make('excerpt')
                                        ->label('Summary')
                                        ->required(),
                                ]),
                            Tab::make('Content')
                                ->schema([
                                    MarkdownEditor::make('content'),
                                ]),
                            Tab::make('SEO')
                                ->schema([
                                    TextInput::make('meta_description'),

                                ]),
                        ])->columnSpan([
                            'md' => 2,
                            'lg' => 4,
                            'xl' => 4,
                            '2xl' => 6,
                        ]),
                    Section::make('Post Settings')
                        ->schema([
                            Toggle::make('published_at')
                                ->onColor('success')
                                ->offColor('danger')
                                ->live(onBlur: true)
                                ->label(function (Get $get) {
                                    return $get('published_at') ? 'Published' : 'Unpublished';
                                })
                                ->dehydrateStateUsing(function (?Model $record, ?string $state) {
                                    if (! $state) {
                                        return null;
                                    }

                                    if (! $record || ! $record->isPublished()) {
                                        return now();
                                    }

                                    return $record->published_at;
                                }),
                            Toggle::make('featured_post')
                                ->label('Is Featured?'),
                            TextInput::make('slug')
                                ->required()
                                ->helperText(
                                    'The URL of the page.'
                                ),
                            CuratorPicker::make('featured_image')
                                ->relationship('featured_image', 'id')
                                ->required(),
                        ])->columnSpan([
                            'md' => 1,
                            'lg' => 4,
                            'xl' => 2,
                            '2xl' => 2,
                        ]),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
