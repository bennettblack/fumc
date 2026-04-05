<?php

namespace App\Filament;

use Filament\Support\Contracts\HasLabel;

enum NavigationGroup implements HasLabel
{
    case WebsiteResources;
    case Forms;
    case Administration;

    public function getLabel(): string
    {
        return match ($this) {
            self::WebsiteResources => 'Website Resources',
            self::Forms => 'Forms',
            self::Administration => 'Administration',
        };
    }
}
