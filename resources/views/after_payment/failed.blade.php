@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="Failed Order" class="bg-[#FBD9D0]" />

    {{-- Successful Order section --}}
    <section class="mb-16">
        <div class="container-init grid place-content-center">
            <div class="text-neutral-900 max-w-sm">
                <div class="flex flex-col justify-center items-center gap-5">
                    <div class="h-40 w-40">
                        <img src="{{ asset('icons/Failed Order.svg') }}" alt="" class="w-full" />
                    </div>
                    <h6 class="font-bold text-2xl">Oops! There was an issue</h6>
                    <p class="text-sm text-neutral-500 text-center">
                        Oops! There was a problem processing your order. Please review the details and try again.
                    </p>
                    <a href="" class="btn-dark flex gap-2 justify-center items-center">
                        <p class="text-sm font-medium">Reorder</p>
                        <img src="{{ asset('icons/right.svg') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
