@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="Successful Order" class="bg-[#D5E5D7]" />

    {{-- Successful Order section --}}
    <section class="mb-16">
        <div class="container-init grid place-content-center">
            <div class="text-neutral-900 max-w-sm">
                <div class="flex flex-col justify-center items-center gap-5">
                    <div class="h-40 w-40">
                        <img src="{{ asset('icons/Success Order.svg') }}" alt="" class="w-full" />
                    </div>
                    <h6 class="font-bold text-2xl">Thank you for shopping</h6>
                    <p class="text-sm text-neutral-500 text-center">
                        Your order has been successfully placed and is now being processed.
                    </p>
                    <a href="" class="btn-dark flex gap-2 justify-center items-center">
                        <p class="text-sm font-medium">Go to my account</p>
                        <img src="{{ asset('icons/right.svg') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
