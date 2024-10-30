@props(['image' => '', 'name' => '', 'status' => '', 'price' => ''])

<div class="text-center">
    <div class="grid place-content-center p-2 bg-neutral-100 mb-4 rounded">
        <img src="{{ asset($image) }}" alt="" />
    </div>
    <h4 class="text-sm font-medium mb-2">
        {{ $name }}
    </h4>
    <div class="flex justify-evenly font-medium text-[12px]">
        <p>{{ $status }}</p>
        <p>${{ $price }}</p>
    </div>
</div>
