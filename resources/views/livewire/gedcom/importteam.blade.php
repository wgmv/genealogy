<x-form-section submit="importTeam">
    <x-slot name="title">
        <div class="dark:text-gray-400">
            {{ __('team.team_details') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="dark:text-gray-100">
            {{ __('gedcom.team_create_new_gedcom') }}
        </div>

        <div class="dark:text-gray-100">
            <br />
            <p>
                {{ __('gedcom.team_gedcom_reference') }} :
                <x-link href="https://gedcom.io/specs/" target="_blank" title="{{ __('gedcom.team_gedcom_specifications') }}">
                    <x-svg.gedcom class="size-36 dark:fill-white hover:fill-primary-300 dark:hover:fill-primary-300" alt="gedcom" />
                </x-link>
            </p>
        </div>

        <x-ts-alert color="cyan">
            <x-slot:title>
                {{ __('gedcom.before_import') }} ...
            </x-slot:title>

            {{ __('gedcom.before_import_validate') }} :
            <x-ts-link class="text-white text-lg" href="https://ged-inline.org/" target="_blank" />
        </x-ts-alert>

        <x-under-construction />
    </x-slot>

    <x-slot name="form" enctype="multipart/form-data">
        <div class="col-span-6">
            <x-label value="{{ __('team.owner') }} :" />

            <div class="flex items-center mt-2">
                <img class="object-cover w-12 h-12 rounded-full" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">

                <div class="leading-tight ms-4">
                    <div class="text-sm text-gray-700">{{ $this->user->name }}</div>
                    <div class="text-sm text-gray-700">{{ $this->user->email }}</div>
                </div>
            </div>
        </div>

        <div class="col-span-6">
            <hr class="my-2 h-0.5 border-t-0 bg-neutral-600 dark:bg-neutral-400 opacity-100 dark:opacity-75" />
        </div>

        {{-- team name --}}
        <div class="col-span-6">
            <x-ts-input id="name" name="name" type="text" class="block w-full mt-1" wire:model="name" autofocus required label="{{ __('team.name') }} : *" />

            <x-input-error for="name" class="mt-2" />
        </div>

        {{-- team description --}}
        <div class="col-span-6">
            <div class="relative block w-full mt-1 mb-3">
                <x-ts-textarea id="description" name="description" wire:model="description" label="{{ __('team.description') }} :" />
            </div>

            <x-input-error for="description" class="mt-2" />
        </div>

        {{-- upload --}}
        <div class="col-span-6">
            <x-ts-upload id="file" wire:model="file" accept=".ged" label="{{ __('gedcom.gedcom_file') }} : *" hint="{{ __('gedcom.team_gedcom_hint') }}"
                tip="{{ __('gedcom.team_gedcom_tip') }}" :preview="false" required>
                <x-slot:footer>
                    <x-ts-alert text="{{ __('gedcom.team_gedcom_version') }}" color="cyan" />
                </x-slot:footer>
            </x-ts-upload>

            <x-input-error for="file" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-ts-button type="submit" color="primary">
            {{ __('gedcom.import') }}
        </x-ts-button>
    </x-slot>
</x-form-section>
