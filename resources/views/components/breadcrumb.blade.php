@props(['page' => '', 'prev' => 'Ecommerce'])

<section {{ $attributes->merge(['class' => 'mb-16']) }}>
    <div class="container-init flex items-center py-6">
        <div class="">
            <h2 class="font-bold text-2xl text-neutral-900 mb-2">
                {{ $page }}
            </h2>
            <div class="flex items-center gap-1">
                <p class="font-medium text-neutral-500 text-sm">
                    {{ $prev }}
                </p>
                <img src="../icons/Chevron Right.svg" alt="" />
                <p class="font-medium text-neutral-900 text-sm">
                    {{ $page }}
                </p>
            </div>
        </div>
    </div>
</section>
