<?php

namespace App\Filament\Pages;

use App\Filament\NavigationGroup;
use App\Models\Setting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

/**
 * @property-read Schema $form
 */
class SiteSettings extends Page
{
    protected string $view = 'filament.pages.site-settings';

    protected static ?string $title = 'Site Settings';

    protected static ?string $navigationLabel = 'Site Settings';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static UnitEnum|string|null $navigationGroup = NavigationGroup::Administration;

    /** @var array<string, mixed>|null */
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'featured_video_url' => Setting::get('featured_video_url'),
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    Section::make('Featured Video')
                        ->description('Displays a featured Vimeo video on the home page between the hero and pastor welcome sections. Leave empty to hide the section.')
                        ->schema([
                            TextInput::make('featured_video_url')
                                ->label('Vimeo URL')
                                ->url()
                                ->placeholder('https://vimeo.com/123456789')
                                ->helperText('Paste the full Vimeo video URL (e.g. https://vimeo.com/123456789).')
                                ->regex('/^https?:\/\/(?:www\.)?vimeo\.com\/\d+/i')
                                ->validationMessages([
                                    'regex' => 'Please enter a valid Vimeo video URL.',
                                ]),
                        ]),
                ])
                    ->livewireSubmitHandler('save')
                    ->footer([
                        Actions::make([
                            Action::make('save')
                                ->label('Save')
                                ->submit('save')
                                ->keyBindings(['mod+s']),
                            Action::make('clearFeaturedVideo')
                                ->label('Clear Featured Video')
                                ->color('danger')
                                ->outlined()
                                ->icon(Heroicon::OutlinedXMark)
                                ->visible(fn (): bool => filled(Setting::get('featured_video_url')))
                                ->requiresConfirmation()
                                ->modalHeading('Clear featured video?')
                                ->modalDescription('This will remove the featured video section from the home page.')
                                ->modalSubmitActionLabel('Clear')
                                ->action('clearFeaturedVideo'),
                        ]),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        Setting::set('featured_video_url', $data['featured_video_url'] ?? null);

        Notification::make()
            ->success()
            ->title('Settings saved')
            ->send();
    }

    public function clearFeaturedVideo(): void
    {
        Setting::set('featured_video_url', null);

        $this->form->fill(['featured_video_url' => null]);

        Notification::make()
            ->success()
            ->title('Featured video cleared')
            ->send();
    }
}
