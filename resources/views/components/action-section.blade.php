<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-5']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="p-4 sm:p-6 bg-white rounded">
            {{ $content }}
        </div>
    </div>
</div>
