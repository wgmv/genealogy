@section('title')
    &vert; {{ __('team.team') }}
@endsection

<x-app-layout>
    <x-slot name="heading">
        {{ __('team.team') }}
    </x-slot>

    <div class="p-2 overflow-x-auto max-w-7xl grow dark:text-neutral-200">
        <livewire:team />
    </div>
</x-app-layout>
