<?php

namespace App\Filament\Resources\Happenings\Pages;

use App\Filament\Resources\Happenings\HappeningResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHappenings extends ListRecords
{
    protected static string $resource = HappeningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
