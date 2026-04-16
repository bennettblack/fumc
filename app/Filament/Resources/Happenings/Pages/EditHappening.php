<?php

namespace App\Filament\Resources\Happenings\Pages;

use App\Filament\Resources\Happenings\HappeningResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHappening extends EditRecord
{
    protected static string $resource = HappeningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
