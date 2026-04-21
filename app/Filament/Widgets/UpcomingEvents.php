<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Events\EventResource;
use App\Models\Event;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class UpcomingEvents extends TableWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 1;

    public function table(Table $table): Table
    {
        return $table
            ->heading('Upcoming Events')
            ->headerActions([
                Action::make('create')
                    ->label('New Event')
                    ->icon(Heroicon::OutlinedPlus)
                    ->url(EventResource::getUrl('create')),
            ])
            ->query(
                Event::query()
                    ->where('starts_at', '>=', today()->toDateString())
                    ->orderBy('starts_at')
                    ->limit(5),
            )
            ->columns([
                TextColumn::make('title')
                    ->wrap(),
                TextColumn::make('starts_at')
                    ->label('Date')
                    ->date(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->emptyStateHeading('No upcoming events')
            ->emptyStateDescription('Schedule a new event to see it here.')
            ->paginated(false);
    }
}
