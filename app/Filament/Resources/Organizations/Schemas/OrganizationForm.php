<?php

namespace App\Filament\Resources\Organizations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required()
                    ->rows(4),
                FileUpload::make('image')
                    ->image()
                    ->disk('r2')
                    ->directory('organizations')
                    ->nullable(),
                TextInput::make('contact')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
