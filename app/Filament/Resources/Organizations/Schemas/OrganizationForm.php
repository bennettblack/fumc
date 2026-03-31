<?php

namespace App\Filament\Resources\Organizations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'link',
                        'bulletList',
                        'orderedList',
                    ]),
                FileUpload::make('image')
                    ->image()
                    ->imageAspectRatio('4:3')
                    ->automaticallyCropImagesToAspectRatio()
                    ->automaticallyResizeImagesMode('cover')
                    ->automaticallyResizeImagesToWidth('800')
                    ->automaticallyResizeImagesToHeight('600')
                    ->imageEditor()
                    ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                        $filename = 'organizations/' . Str::ulid() . '.webp';

                        $webp = Image::read($file->getRealPath())
                            ->toWebp(80);

                        Storage::disk('r2')->put($filename, (string) $webp);

                        return $filename;
                    })
                    ->helperText('Will be cropped to 4:3 and converted to WebP.'),
                TextInput::make('contact')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
