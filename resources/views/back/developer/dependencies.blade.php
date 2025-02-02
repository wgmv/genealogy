@section('title')
    &vert; {{ __('app.dependencies') }}
@endsection

<x-app-layout>
    <x-slot name="heading">
        {{ __('app.dependencies') }}
    </x-slot>

    <div class="p-2 max-w-5xl overflow-x-auto grow dark:text-neutral-200">
        <x-ts-tab selected="TallStack">
            {{-- tallstack --}}
            <x-ts-tab.items tab="TallStack">
                <div class="grid gap-4 md:grid-cols-2">
                    <ul class="w-full my-4">
                        <li class="py-2">
                            <x-link href="https://laravel.com/" target="_blank">Laravel</x-link> 11
                            <x-ts-button xs href="https://laravel.com/docs/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                        </li>

                        <li class="py-2">
                            <x-link href="https://jetstream.laravel.com/" target="_blank">Laravel Jetstream</x-link> 5 (featuring <x-link href="https://jetstream.laravel.com/features/teams.html"
                                target="_blank">Teams</x-link>)
                        </li>

                        <li class="py-2">
                            <x-link href="https://livewire.laravel.com/" target="_blank">Laravel Livewire</x-link> 3
                            <x-ts-button xs href="https://livewire.laravel.com/docs/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                        </li>

                        <li class="py-2">
                            <x-link href="https://alpinejs.dev/" target="_blank">Alpine.js</x-link>3
                            <x-ts-button xs href="https://alpinejs.dev/start-here/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                        </li>

                        <li class="py-2">
                            <x-link href="https://filamentphp.com/" target="_blank">Laravel Filament</x-link> 3 (only Table Builder)
                            <x-ts-button xs href="https://filamentphp.com/docs/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                        </li>

                        <li class="py-2">
                            <x-link href="https://tailwindcss.com/" target="_blank">Tailwind CSS</x-link> 3
                            <x-ts-button xs href="https://tailwindcss.com/docs/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                        </li>

                        <li class="py-2">
                            <x-link href="https://tallstackui.com/" target="_blank">TallStackUI</x-link> 1 (featuring <x-link href="https://tabler.io/icons" target="_blank">Tabler Icons</x-link>)
                            <x-ts-button xs href="https://tallstackui.com/docs/get-started/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                        </li>
                    </ul>

                    <div class="grid grid-cols-4 gap-4 mt-4 ml-4 max-w-96 justify-items-center">
                        <div class="content-center max-w-24">
                            <img src="{{ url('img/logo/laravel.webp') }}" class="rounded" alt="laravel" title="Laravel" />
                        </div>

                        <div class="content-center max-w-24">
                            <img src="{{ url('img/logo/livewire.webp') }}" class="rounded" alt="livewire" title="Livewire" />
                        </div>

                        <div class="content-center max-w-24">
                            <img src="{{ url('img/logo/alpinejs.webp') }}" class="rounded" alt="alpinejs" title="alpine.js" />
                        </div>

                        <div class="content-center max-w-24">
                            <img src="{{ url('img/logo/tailwindcss.webp') }}" class="rounded" alt="tailwindcss" title="Tailwind CSS" />
                        </div>

                        <div class="content-center col-span-2 max-w-24">
                            <img src="{{ url('img/logo/tallstackui.webp') }}" class="rounded" alt="talstackui" title="TallStackUI" />
                        </div>

                        <div class="content-center col-span-2 max-w-24">
                            <img src="{{ url('img/logo/filament.webp') }}" class="rounded" alt="filament" title="Filament" />
                        </div>
                    </div>
                </div>
            </x-ts-tab.items>

            {{-- github --}}
            <x-ts-tab.items tab="Github">
                <ul class="w-full my-4">
                    <li class="py-2">
                        <x-link href="https://github.com/barryvdh/laravel-ide-helper/" target="_blank">barryvdh/laravel-ide-helper</x-link>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/csstools/postcss-plugins/" target="_blank">csstools/postcss-plugins</x-link> (needed by Filament Table Builder)
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/Intervention/image/" target="_blank">intervention/image</x-link>
                        <x-ts-button xs href="https://image.intervention.io/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/korridor/laravel-has-many-merged/" target="_blank">korridor/laravel-has-many-merged</x-link>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/opcodesio/log-viewer/" target="_blank">opcodesio/log-viewer</x-link>
                        <x-ts-button xs href="https://log-viewer.opcodes.io/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/spatie/laravel-activitylog/" target="_blank">spatie/activity-log</x-link>
                        <x-ts-button xs href="https://spatie.be/docs/laravel-activitylog/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/spatie/laravel-backup/" target="_blank">spatie/laravel-backup</x-link>
                        <x-ts-button xs href="https://spatie.be/docs/laravel-backup/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/spatie/laravel-medialibrary/" target="_blank">spatie/laravel-medialibrary</x-link>
                        <x-ts-button xs href="https://spatie.be/docs/laravel-medialibrary/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/stefangabos/world_countries/" target="_blank">stefangabos/world_countries</x-link>
                        <x-ts-button xs href="https://stefangabos.github.io/world_countries/" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/stevebauman/location/" target="_blank">stevebauman/location</x-link>
                    </li>
                </ul>
            </x-ts-tab.items>

            {{-- github localization --}}
            <x-ts-tab.items tab="Github Localization">
                <ul class="w-full my-4">
                    <li class="py-2">
                        <x-link href="https://github.com/Laravel-Lang/lang" target="_blank">Laravel-Lang/lang</x-link>
                        <x-ts-button xs href="https://laravel-lang.com/packages-lang.html" target="_blank" class="ms-5">{{ __('app.documentation') }}</x-ts-button>
                        <br />
                        <span class="ms-5">copy</span> <span class="text-red-500">/lang/locales/xx/json.json</span> to <span class="text-red-500">/lang/xx.json</span>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/LarsWiegers/laravel-translations-checker/" target="_blank">LarsWiegers/laravel-translations-checker</x-link>
                        <br />
                        <span class="ms-5">to check languages, use command :</span> <span class="text-red-500">php artisan translations:check --excludedDirectories=vendor</span>
                </ul>

                <hr />

                <ul class="w-full my-4">
                    <x-link href="https://github.com/alisalehi1380/laravel-lang-files-translator" target="_blank">alisalehi1380/laravel-lang-files-translator</x-link>
                    <br />
                    <span class="ms-5">to create new language, use command :</span> <span class="text-red-500">php artisan translate:lang {from} {to}</span>
                    <br />
                    <span class="ms-5">example:</span> <span class="text-red-500">php artisan translate:lang en fa</span> for Persian (fa)
                    </li>
                </ul>
            </x-ts-tab.items>

            {{-- javascript --}}
            <x-ts-tab.items tab="Javascript">
                <ul class="w-full my-4">
                    <li class="py-2">
                        <x-link href="https://www.chartjs.org/" target="_blank">Chart.js</x-link> - Charts
                        <x-ts-button xs href="https://www.chartjs.org/docs/latest/samples/" target="_blank" class="ms-5">{{ __('app.demonstration') }}</x-ts-button>
                    </li>

                    <li class="py-2">
                        <x-link href="https://github.com/StephanWagner/svgMap/" target="_blank">StephanWagner/svgMap</x-link> - WordMap
                        <x-ts-button xs href="https://stephanwagner.me/create-world-map-charts-with-svgmap#svgMapDemoGDP" target="_blank" class="ms-5">{{ __('app.demonstration') }}</x-ts-button>
                    </li>
                </ul>
            </x-ts-tab.items>

            {{-- 3rd Party --}}
            <x-ts-tab.items tab="3rd-Party">
                <ul class="w-full my-4">
                    <li class="py-2">
                        <x-link href="https://tabler.io/icons/" target="_blank">tabler.io</x-link> - Icons
                    </li>

                    <li class="py-2">
                        <x-link href="https://www.svgrepo.com/" target="_blank">svgrepo.com</x-link> - SVG Repository
                    </li>
                </ul>
            </x-ts-tab.items>

            {{-- gedcom --}}
            <x-ts-tab.items tab="GEDCOM">
                <ul class="w-full my-4">
                    <li class="py-2">
                        <x-link href="https://gedcom.io/" target="_blank">FamilySearch GEDCOM</x-link>
                    </li>

                    <li class="py-2">
                        <x-link href="https://gedcom.io/specs/" target="_blank">FamilySearch GEDCOM - Specifications</x-link>
                    </li>

                    <li class="py-2">
                        <x-link href="https://gedcom.io/tools/" target="_blank">FamilySearch GEDCOM - Tools</x-link>
                    </li>
                </ul>

                <hr />

                <ul class="w-full my-4">
                    <li class="py-2">
                        <x-link href="https://ged-inline.org/" target="_blank">Validate your GEDCOM files</x-link>
                    </li>
                </ul>
            </x-ts-tab.items>
        </x-ts-tab>
    </div>
</x-app-layout>
