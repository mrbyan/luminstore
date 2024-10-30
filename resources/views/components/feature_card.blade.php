@props(['image' => '', 'title' => '', 'description' => ''])

<div class="md:py-7 py-4">
    <div class="md:mb-9 mb-4">
        <img src="{{ asset($image) }}" alt="{{ $title }}" />
    </div>
    <h6 class="mb-3 font-semibold text-base text-neutral-800">
        {{ $title }}
    </h6>
    <p class="text-sm text-neutral-500">
        {{ $description }}
    </p>
</div>
