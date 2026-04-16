<?php

namespace App\Filament\Resources\UntimelyRamblings\Pages;

use App\Filament\Resources\UntimelyRamblings\UntimelyRamblingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUntimelyRambling extends EditRecord
{
    protected static string $resource = UntimelyRamblingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
