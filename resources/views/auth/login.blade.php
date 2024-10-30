@extends('layouts.app')

@section('content')
    {{-- breadcrumb --}}
    <x-breadcrumb page="Login" class="bg-neutral-100" />

    {{-- login section --}}
    <section class="mb-16">
        <div class="container-init">
            <form action="" class="mx-auto max-w-sm grid grid-cols-1 gap-4 text-neutral-500">
                <a href="" class="flex justify-center border py-3 rounded-md gap-1 items-center"><img
                        src="../icons/Google.svg" alt="" />
                    <p class="font-medium text-sm">Continue with Google</p>
                </a>
                <p class="text-center font-medium text-[12px]">OR</p>
                <div class="w-full">
                    <p class="font-medium text-sm">Email</p>
                    <input type="text" name="" id="" class="w-full input" />
                </div>
                <div class="w-full">
                    <p class="font-medium text-sm">Password</p>
                    <input type="text" name="" id="" class="w-full input" />
                </div>
                <a href="" class="text-right font-medium text-[12px]">Forgot Password?</a>
                <button class="btn-dark text-center">
                    Login
                </button>
                <p class="text-center text-sm">
                    Don't have an account? <a href="">Sign up</a>
                </p>
            </form>
        </div>
    </section>
@endsection
