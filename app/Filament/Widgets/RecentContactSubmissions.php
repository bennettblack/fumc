<?php

namespace App\Filament\Widgets;

use App\Models\ContactSubmission;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class RecentContactSubmissions extends TableWidget
{
    protected static ?int $sort = 3;

    protected int|string|array $columnSpan = 1;

    public function table(Table $table): Table
    {
        return $table
            ->heading('Recent Contact Submissions')
            ->query(
                ContactSubmission::query()
                    ->latest()
                    ->limit(5),
            )
            ->columns([
                TextColumn::make('name')
                    ->weight('semibold'),
                TextColumn::make('subject')
                    ->limit(40)
                    ->color('gray'),
                TextColumn::make('created_at')
                    ->label('Received')
                    ->since(),
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->emptyStateHeading('No contact submissions yet')
            ->paginated(false);
    }
}
