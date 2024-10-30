@props(['image' => '', 'name' => '', 'addedOn' => '', 'price' => ''])

<div class="h-[80px] flex w-full justify-between items-center">
    <div class="flex items-center gap-8">
        <div class="h-20 w-20 px-4 py-2">
            <img src="{{ asset($image) }}" alt="" class="w-fit" />
        </div>
        <div class="font-medium">
            <h6 class="text-sm">
                {{ $name }}
            </h6>
            <p class="text-[12px] text-neutral-500">
                Added on: {{ $addedOn }}
            </p>
            <a href="" class="text-[12px]">Remove item</a>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row lg:gap-8 gap-2 font-medium items-center justify-end text-sm">
        <p class="">${{ $price }}</p>
        <a href="" class="lg:px-6 px-2 text-center py-2 border border-neutral-900 rounded-md">Add to cart</a>
    </div>
</div>
