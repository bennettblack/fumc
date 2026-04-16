<?php

namespace App\Filament\Resources\UntimelyRamblings\Pages;

use App\Filament\Resources\UntimelyRamblings\UntimelyRamblingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUntimelyRamblings extends ListRecords
{
    protected static string $resource = UntimelyRamblingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
