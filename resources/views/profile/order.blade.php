@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="My Account" class="bg-neutral-100" />

    {{-- order section --}}
    <section class="mb-16">
        <div class="container-init flex w-full gap-9">
            {{-- sidebar --}}
            @include('partials.sidebar')

            {{-- main --}}
            <main class="md:px-12 border-l-2 border-l-neutral-200 text-neutral-900 w-full">
                <div class="mb-8">
                    <p class="font-semibold text-[16px]">Orders</p>
                </div>
                <div class="flex flex-col gap-6">
                    <x-order_card image='images/best1.png' name='Raw Black T-Shirt Lineup' orderOn='27 July 2023'
                        price='70.00' status='Processing' />
                    <x-order_card image='images/best1.png' name='Raw Black T-Shirt Lineup' orderOn='27 July 2023'
                        price='70.00' status='Processing' />
                </div>
            </main>
        </div>
    </section>
@endsection
