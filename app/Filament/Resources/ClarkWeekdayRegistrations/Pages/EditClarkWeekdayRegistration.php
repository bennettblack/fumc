<?php

namespace App\Filament\Resources\ClarkWeekdayRegistrations\Pages;

use App\Filament\Resources\ClarkWeekdayRegistrations\ClarkWeekdayRegistrationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClarkWeekdayRegistration extends EditRecord
{
    protected static string $resource = ClarkWeekdayRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
