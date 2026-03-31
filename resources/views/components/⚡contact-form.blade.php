<?php

use App\Models\ContactSubmission;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Validate('required|max:255')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('nullable|max:20')]
    public string $phone = '';

    #[Validate('required|max:255')]
    public string $subject = '';

    #[Validate('required|max:2000')]
    public string $body = '';

    public bool $submitted = false;

    public function submit(): void
    {
        $this->validate();

        ContactSubmission::create($this->only(['name', 'email', 'phone', 'subject', 'body']));

        $this->reset();
        $this->submitted = true;
    }
};
?>

<div class="mt-8">
    @if($submitted)
        <div class="rounded-md bg-teal/10 p-6">
            <p class="font-semibold text-teal">Thank you for reaching out!</p>
            <p class="mt-1 text-sm text-gray-600">We've received your message and will get back to you as soon as possible.</p>
        </div>
    @else
        <form wire:submit="submit" class="space-y-5">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name <span class="text-red">*</span></label>
                <input type="text" id="name" wire:model.blur="name" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                @error('name') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red">*</span></label>
                    <input type="email" id="email" wire:model.blur="email" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('email') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                    <input type="tel" id="phone" wire:model.blur="phone" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('phone') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="subject" class="block text-sm font-medium text-gray-700">Subject <span class="text-red">*</span></label>
                <input type="text" id="subject" wire:model.blur="subject" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                @error('subject') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Message <span class="text-red">*</span></label>
                <textarea id="body" wire:model.blur="body" maxlength="2000" rows="5" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none"></textarea>
                @error('body') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="inline-flex items-center rounded bg-red px-6 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-red-dark">
                <span wire:loading.remove wire:target="submit">Send Message</span>
                <span wire:loading wire:target="submit">Sending...</span>
            </button>
        </form>
    @endif
</div>
