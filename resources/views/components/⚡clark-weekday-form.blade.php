<?php

use App\Models\ClarkWeekdayRegistration;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Validate(rule: 'required|max:255')]
    public string $child_name = '';

    #[Validate(rule: 'required|date|before:today', message: [
        'before' => 'Date must be before today.'
    ])]
    public string $child_dob = '';

    #[Validate('nullable|max:255')]
    public string $child_siblings = '';

    #[Validate('required|max:255')]
    public string $parent_names = '';

    #[Validate('required|max:255')]
    public string $address_1 = '';

    #[Validate('nullable|max:255')]
    public string $address_2 = '';

    #[Validate('required|max:255')]
    public string $city = '';

    #[Validate('required|max:255')]
    public string $state = '';

    #[Validate('required|max:20')]
    public string $zip = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('nullable|max:20')]
    public string $phone = '';

    #[Validate('nullable|max:20')]
    public string $work_phone = '';

    #[Validate('required|in:1st available opening,5 days,3 days,2 days')]
    public string $schedule = '';

    #[Validate('boolean')]
    public bool $extended_care = false;

    #[Validate('required|boolean')]
    public bool $multiple_children = false;

    #[Validate('nullable|max:1000')]
    public string $other_children = '';

    #[Validate('required|boolean')]
    public bool $church_member = false;

    public bool $submitted = false;

    public function submit(): void
    {
        $this->validate();

        ClarkWeekdayRegistration::create($this->only([
            'child_name', 'child_dob', 'child_siblings',
            'parent_names', 'address_1', 'address_2', 'city', 'state', 'zip',
            'email', 'phone', 'work_phone',
            'schedule', 'extended_care', 'multiple_children', 'other_children', 'church_member',
        ]));

        $this->reset();
        $this->submitted = true;
    }
};
?>

<div>
    @if($submitted)
        <div class="rounded-md bg-teal/10 p-6 text-center">
            <p class="font-semibold text-teal">Thank you for your submission!</p>
            <p class="mt-1 text-sm text-gray-600">We've received your waiting list request and will be in touch soon.</p>
        </div>
    @else
        <form wire:submit="submit" class="mt-8 space-y-5">
            <h3 class="text-sm font-semibold uppercase tracking-wider text-teal">Child Information</h3>

            <div>
                <label for="child_name" class="block text-sm font-medium text-gray-700">Child's Full Name <span class="text-red">*</span></label>
                <input type="text" id="child_name" wire:model.blur="child_name" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                @error('child_name') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    <label for="child_dob" class="block text-sm font-medium text-gray-700">Child's Date of Birth <span class="text-red">*</span></label>
                    <input type="date" id="child_dob" wire:model.blur="child_dob" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('child_dob') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="child_siblings" class="block text-sm font-medium text-gray-700">Child's Siblings <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                    <input type="text" id="child_siblings" wire:model.blur="child_siblings" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('child_siblings') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="pt-4">
                <h3 class="text-sm font-semibold uppercase tracking-wider text-teal">Parent / Guardian Information</h3>
            </div>

            <div>
                <label for="parent_names" class="block text-sm font-medium text-gray-700">Parent's Full Names <span class="text-red">*</span></label>
                <input type="text" id="parent_names" wire:model.blur="parent_names" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                @error('parent_names') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    <label for="address_1" class="block text-sm font-medium text-gray-700">Address 1 <span class="text-red">*</span></label>
                    <input type="text" id="address_1" wire:model.blur="address_1" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('address_1') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="address_2" class="block text-sm font-medium text-gray-700">Address 2 <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                    <input type="text" id="address_2" wire:model.blur="address_2" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('address_2') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5 sm:grid-cols-4">
                <div class="col-span-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">City <span class="text-red">*</span></label>
                    <input type="text" id="city" wire:model.blur="city" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('city') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="state" class="block text-sm font-medium text-gray-700">State <span class="text-red">*</span></label>
                    <input type="text" id="state" wire:model.blur="state" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('state') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="zip" class="block text-sm font-medium text-gray-700">Zip <span class="text-red">*</span></label>
                    <input type="text" id="zip" wire:model.blur="zip" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('zip') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
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
                <div>
                    <label for="work_phone" class="block text-sm font-medium text-gray-700">Work Phone <span class="text-xs font-normal text-gray-400">(optional)</span></label>
                    <input type="tel" id="work_phone" wire:model.blur="work_phone" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none">
                    @error('work_phone') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="pt-4">
                <h3 class="text-sm font-semibold uppercase tracking-wider text-teal">Program Details</h3>
            </div>

            <fieldset>
                <legend class="block text-sm font-medium text-gray-700">Schedule of Care <span class="text-red">*</span></legend>
                <div class="mt-2 flex flex-wrap gap-x-6 gap-y-2">
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model="schedule" value="1st available opening" class="text-red focus:ring-red">
                        1st Available Opening
                    </label>
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model="schedule" value="5 days" class="text-red focus:ring-red">
                        5 Days
                    </label>
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model="schedule" value="3 days" class="text-red focus:ring-red">
                        3 Days
                    </label>
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model="schedule" value="2 days" class="text-red focus:ring-red">
                        2 Days
                    </label>
                </div>
                @error('schedule') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </fieldset>

            <label class="flex items-center gap-2 text-sm text-gray-700">
                <input type="checkbox" wire:model="extended_care" class="rounded text-red focus:ring-red">
                Extended Care 3:00 – 5:30 PM
            </label>

            <fieldset>
                <legend class="block text-sm font-medium text-gray-700">Do you have more than one child applying to Clark Weekday? <span class="text-red">*</span></legend>
                <div class="mt-2 flex gap-6">
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model.live="multiple_children" value="1" class="text-red focus:ring-red">
                        Yes
                    </label>
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model.live="multiple_children" value="0" class="text-red focus:ring-red">
                        No
                    </label>
                </div>
                @error('multiple_children') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </fieldset>

            @if($multiple_children)
                <div>
                    <label for="other_children" class="block text-sm font-medium text-gray-700">Names &amp; ages of other children</label>
                    <textarea id="other_children" wire:model.blur="other_children" rows="2" class="mt-1 block w-full rounded border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-teal focus:ring-1 focus:ring-teal focus:outline-none"></textarea>
                    @error('other_children') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
                </div>
            @endif

            <fieldset>
                <legend class="block text-sm font-medium text-gray-700">Are you an active church member of FUMC Texarkana, AR? <span class="text-red">*</span></legend>
                <div class="mt-2 flex gap-6">
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model="church_member" value="1" class="text-red focus:ring-red">
                        Yes
                    </label>
                    <label class="flex items-center gap-2 text-sm text-gray-700">
                        <input type="radio" wire:model="church_member" value="0" class="text-red focus:ring-red">
                        No
                    </label>
                </div>
                @error('church_member') <p class="mt-1 text-xs text-red">{{ $message }}</p> @enderror
            </fieldset>

            <div class="pt-2">
                <button type="submit" class="inline-flex items-center rounded bg-red px-6 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-red-dark">
                    <span wire:loading.remove wire:target="submit">Submit</span>
                    <span wire:loading wire:target="submit">Submitting...</span>
                </button>
            </div>
        </form>
    @endif
</div>
