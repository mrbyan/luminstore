@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="My Account" />

    {{-- shipping address section --}}
    <section class="mb-16">
        <div class="container-init flex w-full px-3 gap-9">
            {{-- sidebar --}}
            @include('partials.sidebar')

            {{-- main --}}
            <main class="md:px-12 border-l-2 border-l-neutral-200 text-neutral-900 w-full">
                <div class="mb-8">
                    <p class="font-semibold text-[16px]">Shipping Address</p>
                </div>
                <form action="" class="flex flex-col lg:w-2/3 gap-4">
                    <div>
                        <p class="font-medium text-sm text-neutral-600">
                            Street Address
                        </p>
                        <input type="text" value="2436 Naples Avenue" name="" id=""
                            class="px-4 py-[10px] border rounded border-neutral-100 w-full text-neutral-700" />
                    </div>
                    <div class="flex md:flex-row flex-col gap-4">
                        <div>
                            <p class="font-medium text-sm text-neutral-600">
                                City
                            </p>
                            <input type="text" value="Panama City" name="" id=""
                                class="px-4 py-[10px] border rounded border-neutral-100 w-full text-neutral-700" />
                        </div>
                        <div>
                            <p class="font-medium text-sm text-neutral-600">
                                State
                            </p>
                            <input type="text" value="FL" name="" id=""
                                class="px-4 py-[10px] border rounded border-neutral-100 w-full text-neutral-700" />
                        </div>
                    </div>
                    <div class="flex md:flex-row flex-col gap-4">
                        <div>
                            <p class="font-medium text-sm text-neutral-600">
                                Zip Code
                            </p>
                            <input type="text" value="32405" name="" id=""
                                class="px-4 py-[10px] border rounded border-neutral-100 w-full text-neutral-700" />
                        </div>
                        <div>
                            <p class="font-medium text-sm text-neutral-600">
                                Country
                            </p>
                            <input type="text" value="United States" name="" id=""
                                class="px-4 py-[10px] border rounded border-neutral-100 w-full text-neutral-700" />
                        </div>
                    </div>
                    <button class="btn-dark md:w-fit w-full mt-8">
                        Save Changes
                    </button>
                </form>
            </main>
        </div>
    </section>
@endsection
