<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HeaderSettings extends Settings
{
    public ?string $site_logo;

    public static function group(): string
    {
        return 'header';
    }

}
