<?php

namespace App\Filament\Pages;

use App\Settings\HeaderSettings;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageHeader extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = HeaderSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                CuratorPicker::make('header.site_logo'),
            ]);
    }
}
