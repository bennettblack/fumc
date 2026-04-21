<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make('Event')
                    ->columnSpan(8)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                    ]),
                Section::make('Details')
                    ->columnSpan(4)
                    ->schema([
                        DatePicker::make('starts_at')
                            ->required(),
                    ]),
            ]);
    }
}
