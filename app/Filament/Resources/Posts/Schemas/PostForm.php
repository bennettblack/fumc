<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Enums\PostType;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\RichEditor\ToolbarButtonGroup;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\Laravel\Facades\Image;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(12)
            ->components([
                Section::make('Post')
                    ->columnSpan(8)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('description')
                            ->maxLength(255)
                            ->helperText('A short summary shown in listings.'),
                        RichEditor::make('body')
                            ->required()
                            ->fileAttachmentsDisk('r2')
                            ->fileAttachmentsDirectory('posts')
                            ->fileAttachmentsVisibility('public')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'link'],
                                [ToolbarButtonGroup::make('Paragraph', ['paragraph', 'h1', 'h2', 'h3'])->textualButtons()],
                                [ToolbarButtonGroup::make('Alignment', ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'])],
                                ['blockquote', 'bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
                    ]),
                Section::make('Details')
                    ->columnSpan(4)
                    ->schema([
                        Select::make('type')
                            ->required()
                            ->options(collect(PostType::cases())->mapWithKeys(
                                fn (PostType $type) => [$type->value => $type->label()]
                            )),
                        DatePicker::make('published_at')
                            ->helperText('Leave blank to save as a draft.'),
                        FileUpload::make('image')
                            ->disk('r2')
                            ->directory('posts')
                            ->visibility('public')
                            ->image()
                            ->imageAspectRatio('16:9')
                            ->automaticallyCropImagesToAspectRatio()
                            ->automaticallyResizeImagesMode('cover')
                            ->automaticallyResizeImagesToWidth('1200')
                            ->automaticallyResizeImagesToHeight('675')
                            ->imageEditor()
                            ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                                $filename = 'posts/'.Str::ulid().'.webp';

                                $webp = Image::decode($file->getRealPath())
                                    ->encode(new WebpEncoder(80));

                                Storage::disk('r2')->put($filename, (string) $webp);

                                return $filename;
                            })
                            ->helperText('Will be cropped to 16:9 and converted to WebP.'),
                    ]),
            ]);
    }
}
