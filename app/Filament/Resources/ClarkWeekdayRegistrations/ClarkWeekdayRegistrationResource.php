<?php

namespace App\Filament\Resources\ClarkWeekdayRegistrations;

use App\Filament\NavigationGroup;
use App\Filament\Resources\ClarkWeekdayRegistrations\Pages\EditClarkWeekdayRegistration;
use App\Filament\Resources\ClarkWeekdayRegistrations\Pages\ListClarkWeekdayRegistrations;
use App\Filament\Resources\ClarkWeekdayRegistrations\Schemas\ClarkWeekdayRegistrationForm;
use App\Filament\Resources\ClarkWeekdayRegistrations\Tables\ClarkWeekdayRegistrationsTable;
use App\Models\ClarkWeekdayRegistration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ClarkWeekdayRegistrationResource extends Resource
{
    protected static ?string $model = ClarkWeekdayRegistration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static ?string $navigationLabel = 'Clark Weekday Registrations';

    protected static UnitEnum|string|null $navigationGroup = NavigationGroup::Forms;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return ClarkWeekdayRegistrationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClarkWeekdayRegistrationsTable::configure($table);
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
            'index' => ListClarkWeekdayRegistrations::route('/'),
            'edit' => EditClarkWeekdayRegistration::route('/{record}/edit'),
        ];
    }
}
