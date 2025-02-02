@section('title')
    &vert; {{ __('app.home') }}
@endsection

<x-app-layout>
    <x-slot name="heading">
        {{ __('app.home') }}
    </x-slot>

    <div class="w-full p-2 space-y-5">
        <div class="pb-10 dark:text-neutral-200">
            <div class="flex flex-col items-center pt-6 sm:pt-0">
                <div>
                    <x-authentication-card-logo />
                </div>

                <div class="w-full p-6 mt-6 overflow-hidden prose bg-white rounded shadow-md sm:max-w-5xl">
                    {!! $home !!}
                </div>
                <div class="flex-1 flex-grow max-w-full text-center mt-6">
                    @if (auth()->user()->hasPermission('person:create'))
                        {{-- add button --}}
                        <x-ts-button href="/people/add" color="emerald" class="text-sm">
                            <x-ts-icon icon="user-plus" class="size-5" />
                            {{ __('person.add_person') }}
                        </x-ts-button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
