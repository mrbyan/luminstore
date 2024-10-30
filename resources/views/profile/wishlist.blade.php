@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="My Account" />

    {{-- wishlist section --}}
    <section class="mb-16">
        <div class="container-init flex w-full px-3 gap-9">
            {{-- sidebar --}}
            @include('partials.sidebar')

            {{-- main --}}
            <main class="md:px-12 border-l-2 border-l-neutral-200 text-neutral-900 w-full">
                <div class="mb-8">
                    <p class="font-semibold text-[16px]">Wishlist</p>
                </div>
                <div class="flex flex-col gap-6">
                    <x-wishlist_card image='images/best1.png' name='Raw Black T-Shirt Lineup' addedOn='27 July 2023'
                        price='70.00' />
                    <x-wishlist_card image='images/best1.png' name='Raw Black T-Shirt Lineup' addedOn='27 July 2023'
                        price='70.00' />
                </div>
            </main>
        </div>
    </section>
@endsection
