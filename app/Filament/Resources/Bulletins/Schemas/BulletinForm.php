<?php

namespace App\Filament\Resources\Bulletins\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BulletinForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make('Bulletin')
                    ->columnSpan(8)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                    ]),
                Section::make('Details')
                    ->columnSpan(4)
                    ->schema([
                        DatePicker::make('published_at')
                            ->helperText('Leave blank to save as a draft.'),
                        FileUpload::make('file_name')
                            ->label('PDF File')
                            ->disk('r2')
                            ->directory('bulletins')
                            ->visibility('public')
                            ->acceptedFileTypes(['application/pdf']),
                    ]),
            ]);
    }
}
