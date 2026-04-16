<?php

namespace App\Filament\Resources\Happenings;

use App\Filament\NavigationGroup;
use App\Filament\Resources\Happenings\Pages\CreateHappening;
use App\Filament\Resources\Happenings\Pages\EditHappening;
use App\Filament\Resources\Happenings\Pages\ListHappenings;
use App\Filament\Resources\Happenings\Schemas\HappeningForm;
use App\Filament\Resources\Happenings\Tables\HappeningsTable;
use App\Models\Happening;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class HappeningResource extends Resource
{
    protected static ?string $model = Happening::class;

    protected static ?string $slug = 'the-happenings';

    protected static ?string $navigationLabel = 'The Happenings';

    protected static ?string $modelLabel = 'Happening';

    protected static ?string $pluralModelLabel = 'The Happenings';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedNewspaper;

    protected static UnitEnum|string|null $navigationGroup = NavigationGroup::WebsiteResources;

    public static function form(Schema $schema): Schema
    {
        return HappeningForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HappeningsTable::configure($table);
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
            'index' => ListHappenings::route('/'),
            'create' => CreateHappening::route('/create'),
            'edit' => EditHappening::route('/{record}/edit'),
        ];
    }
}
