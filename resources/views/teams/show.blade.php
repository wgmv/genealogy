@section('title')
    &vert; {{ __('team.settings') }}
@endsection

<x-app-layout>
    <x-slot name="heading">
        {{ __('team.settings') }}
    </x-slot>

    <div class="w-full p-2 space-y-5">
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('teams.update-team-name-form', ['team' => $team])

            @livewire('teams.team-member-manager', ['team' => $team])

            @if (auth()->user()->ownsTeam($team) and !$team->personal_team)
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @include('teams.transfer-ownership')
                </div>
            @endif

            @if (Gate::check('delete', $team) and !$team->personal_team)
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('teams.delete-team-form', ['team' => $team])
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
