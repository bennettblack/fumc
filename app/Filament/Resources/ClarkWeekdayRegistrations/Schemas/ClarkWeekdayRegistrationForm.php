<?php

namespace App\Filament\Resources\ClarkWeekdayRegistrations\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ClarkWeekdayRegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Grid::make(1)
                    ->columnSpan(8)
                    ->schema([
                        Section::make('Parent / Guardian')
                            ->schema([
                                TextInput::make('parent_names')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                TextInput::make('address_1')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('address_2')
                                    ->maxLength(255),
                                TextInput::make('city')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('state')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('zip')
                                    ->required()
                                    ->maxLength(20),
                                TextInput::make('email')
                                    ->required()
                                    ->email()
                                    ->maxLength(255),
                                TextInput::make('phone')
                                    ->maxLength(20),
                                TextInput::make('work_phone')
                                    ->maxLength(20),
                            ])
                            ->columns(3),
                        Section::make('Child Information')
                            ->schema([
                                TextInput::make('child_name')
                                    ->required()
                                    ->maxLength(255),
                                DatePicker::make('child_dob')
                                    ->required()
                                    ->label('Date of Birth'),
                                TextInput::make('child_siblings')
                                    ->maxLength(255),
                            ])
                            ->columns(3),
                    ]),
                Section::make('Program Details')
                    ->columnSpan(4)
                    ->schema([
                        Select::make('schedule')
                            ->required()
                            ->options([
                                '1st available opening' => '1st Available Opening',
                                '5 days' => '5 Days',
                                '3 days' => '3 Days',
                                '2 days' => '2 Days',
                            ]),
                        Checkbox::make('extended_care')
                            ->label('Extended Care (3:05 – 5:30 PM)'),
                        Checkbox::make('multiple_children')
                            ->label('Multiple children applying')
                            ->live(),
                        Textarea::make('other_children')
                            ->label('Other children names & ages')
                            ->rows(2)
                            ->visible(fn ($get): bool => (bool) $get('multiple_children')),
                        Checkbox::make('church_member')
                            ->label('Active FUMC member'),
                    ]),
            ]);
    }
}
