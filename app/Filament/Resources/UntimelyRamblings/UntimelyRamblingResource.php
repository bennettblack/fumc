<?php

namespace App\Filament\Resources\UntimelyRamblings;

use App\Filament\NavigationGroup;
use App\Filament\Resources\UntimelyRamblings\Pages\CreateUntimelyRambling;
use App\Filament\Resources\UntimelyRamblings\Pages\EditUntimelyRambling;
use App\Filament\Resources\UntimelyRamblings\Pages\ListUntimelyRamblings;
use App\Filament\Resources\UntimelyRamblings\Schemas\UntimelyRamblingForm;
use App\Filament\Resources\UntimelyRamblings\Tables\UntimelyRamblingsTable;
use App\Models\UntimelyRambling;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class UntimelyRamblingResource extends Resource
{
    protected static ?string $model = UntimelyRambling::class;

    protected static ?string $slug = 'untimely-ramblings';

    protected static ?string $navigationLabel = 'Untimely Ramblings';

    protected static ?string $modelLabel = 'Untimely Rambling';

    protected static ?string $pluralModelLabel = 'Untimely Ramblings';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static UnitEnum|string|null $navigationGroup = NavigationGroup::WebsiteResources;

    public static function form(Schema $schema): Schema
    {
        return UntimelyRamblingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UntimelyRamblingsTable::configure($table);
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
            'index' => ListUntimelyRamblings::route('/'),
            'create' => CreateUntimelyRambling::route('/create'),
            'edit' => EditUntimelyRambling::route('/{record}/edit'),
        ];
    }
}
