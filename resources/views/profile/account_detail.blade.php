@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="My Account" class="bg-neutral-100" />

    {{-- account detail section --}}
    <section class="mb-16">
        <div class="container-init flex w-full gap-9">
            {{-- sidebar --}}
            @include('partials.sidebar')

            {{-- main --}}
            <main class="md:px-12 border-l-2 border-l-neutral-200 text-neutral-900 w-full">
                <div class="mb-8">
                    <p class="font-semibold text-[16px]">Account Details</p>
                </div>
                <form action="" class="lg:w-1/2">
                    <div class="h-24 w-24 mb-8">
                        <img src="https://picsum.photos/96" alt="" class="w-fit rounded-full" />
                    </div>
                    <div class="mb-4">
                        <p class="font-medium text-sm text-neutral-600">
                            Full name
                        </p>
                        <input type="text" name="" id=""
                            class="px-4 py-[10px] border rounded border-neutral-100 w-full text-neutral-700" />
                    </div>
                    <div class="mb-8">
                        <p class="font-medium text-sm text-neutral-600">
                            Email
                        </p>
                        <input type="text" name="" id=""
                            class="px-4 py-[10px] border rounded border-neutral-100 w-full text-neutral-700" />
                    </div>
                    <button class="btn-dark md:w-fit w-full">
                        Save Changes
                    </button>
                </form>
            </main>
        </div>
    </section>
@endsection
