<?php

namespace App\Filament\Resources\TeamMembers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class TeamMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make('Details')
                    ->columnSpan(8)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->helperText('e.g. Senior Pastor, Director of Music'),
                        RichEditor::make('description')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'bulletList',
                                'orderedList',
                            ]),
                        TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first.'),
                    ]),
                Section::make('Photo')
                    ->columnSpan(4)
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->imageAspectRatio('3:4')
                            ->automaticallyCropImagesToAspectRatio()
                            ->automaticallyResizeImagesMode('cover')
                            ->automaticallyResizeImagesToWidth('600')
                            ->automaticallyResizeImagesToHeight('800')
                            ->imageEditor()
                            ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                                $filename = 'team/'.Str::ulid().'.webp';

                                $webp = Image::decode($file->getRealPath())
                                    ->encode(new WebpEncoder(80));

                                Storage::disk('r2')->put($filename, (string) $webp);

                                return $filename;
                            })
                            ->helperText('Portrait orientation (3:4). Converted to WebP.'),
                    ]),
            ]);
    }
}
