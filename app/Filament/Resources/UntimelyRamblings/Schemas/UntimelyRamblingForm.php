<?php

namespace App\Filament\Resources\UntimelyRamblings\Schemas;

use App\Services\WebpImageConverter;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\RichEditor\ToolbarButtonGroup;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class UntimelyRamblingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make('Untimely Rambling')
                    ->columnSpan(8)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        RichEditor::make('body')
                            ->required()
                            ->fileAttachmentsDisk('r2')
                            ->fileAttachmentsDirectory('untimely-ramblings')
                            ->fileAttachmentsVisibility('public')
                            ->saveUploadedFileAttachmentUsing(
                                fn (TemporaryUploadedFile $file): string => WebpImageConverter::store($file, 'untimely-ramblings'),
                            )
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'bulletList', 'orderedList'],
                                ['attachFiles'],
                                ['undo', 'redo'],
                            ]),
                    ]),
                Section::make('Details')
                    ->columnSpan(4)
                    ->schema([
                        DatePicker::make('published_at')
                            ->helperText('Leave blank to save as a draft.'),
                    ]),
            ]);
    }
}
