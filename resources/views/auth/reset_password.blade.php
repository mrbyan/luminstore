@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="Reset Password" class="bg-neutral-100" />

    {{-- reset password section --}}
    <section class="mb-16">
        <div class="container-init">
            <form action="" class="mx-auto max-w-sm grid grid-cols-1 gap-4 text-neutral-500">
                <div class="w-full">
                    <p class="font-medium text-sm">New Password</p>
                    <input type="text" name="" id="" class="w-full input" />
                </div>
                <div class="w-full">
                    <p class="font-medium text-sm">Confirm Password</p>
                    <input type="text" name="" id="" class="w-full input" />
                </div>
                <button class="btn-dark text-center mt-6">
                    Reset password
                </button>
            </form>
        </div>
    </section>
@endsection
