@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="My Account" class="bg-neutral-100" />

    {{-- change password section --}}
    <section class="mb-16">
        <div class="container-init flex w-full gap-9">
            {{-- sidebar --}}
            @include('partials.sidebar')

            {{-- main --}}
            <main class="px-12 border-l-2 border-l-neutral-100/40 text-neutral-900 w-full grid place-content-center">
                <div class="flex flex-col justify-center items-center gap-6">
                    <div class="h-16 w-16">
                        <img src="../icons/Empty State.svg" alt="" class="w-full" />
                    </div>
                    <p class="text-sm text-neutral-500">
                        Your order history is waiting to be filled.
                    </p>
                    <a href="" class="btn-dark flex gap-2 justify-center items-center">
                        <p class="text-sm font-medium">Start Shopping</p>
                        <img src="{{ asset('icons/right.svg') }}" alt="" />
                    </a>
                </div>
            </main>
        </div>
    </section>
@endsection
