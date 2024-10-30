@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="Forgot Password" class="bg-neutral-100" />

    {{-- forgot password section --}}
    <section class="mb-16">
        <div class="container-init">
            <form action="" class="mx-auto max-w-sm grid grid-cols-1 gap-4 text-neutral-500">
                <p class="text-sm text-justify">
                    Please enter the email address associated with your account.
                    We'll promptly send you a link to reset your password.
                </p>
                <div class="w-full">
                    <p class="font-medium text-sm">Email</p>
                    <input type="text" name="" id="" class="w-full input" />
                </div>
                <button class="btn-dark text-center">
                    Send reset link
                </button>
            </form>
        </div>
    </section>
@endsection
