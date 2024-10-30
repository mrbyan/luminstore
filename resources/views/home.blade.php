@extends('layouts.app')

@section('content')
    {{-- hero section --}}
    <section class="w-full bg-neutral-100 md:mb-[88px] mb-11">
        <div class="container-init md:h-[440px] md:py-0 py-10">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="order-2 md:order-1 md:text-left text-center">
                    <h1 class="font-semibold text-neutral-800 md:text-3xl text-2xl mb-3">
                        Fresh Arrivals Online
                    </h1>
                    <p class="text-neutral-600 text-sm md:mb-12 mb-6">
                        Discover Our Newest Collection Today.
                    </p>
                    <button class="btn-dark flex items-center gap-2 mx-auto md:mx-0">
                        <p>View Collection</p>
                        <img src="{{ asset('icons/right.svg') }}" alt="" />
                    </button>
                </div>
                <div class="flex items-end md:h-[382px] md:w-[344px] w-3/4 order-1 md:order-2 md:mb-0 mb-8">
                    <img src="{{ asset('images/hero-image.png') }}" alt="" class="w-fit" />
                </div>
            </div>
        </div>
    </section>

    {{-- feature section --}}
    <section class="lg:mb-[88px] mb-11">
        <div class="container-init md:h-[218px]">
            <div class="grid grid-cols-1 mx-auto md:w-full w-3/4 md:grid-cols-3 gap-4 md:gap-14">
                <x-feature_card image="icons/Delivery.svg" title="Free Shipping"
                    description="Upgrade your style today and get FREE shipping on all orders! Don't miss out." />
                <x-feature_card image="icons/Star Badge.svg" title="Satisfaction Guarantee"
                    description="Shop confidently with our Satisfaction Guarantee: Love
                        it or get a refund." />
                <x-feature_card image="icons/Shield Check.svg" title="Secure Payment"
                    description="Your security is our priority. Your payments are secure
                        with us." />
                </p>
            </div>
        </div>
    </section>

    {{-- best selling section --}}
    <section class="mb-[168px]">
        <div class="container-init">
            <div class="text-center mb-10">
                <p class="capitalize text-[12px] text-neutral-300">Shop Now</p>
                <h2 class="font-bold text-neutral-900 text-2xl">
                    Best Selling
                </h2>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
                <x-product_card image="images/best1.png" name="Classic Monochrome Tees" status="IN STOCK" price="35.00" />
                <x-product_card image="images/best2.png" name="Monochromatic Wardrobe" status="IN STOCK" price="27.00" />
                <x-product_card image="images/best3.png" name="Essential Neutrals" status="IN STOCK" price="22.00" />
                <x-product_card image="images/best4.png" name="UTRAANET Black" status="IN STOCK" price="43.00" />
            </div>
        </div>
    </section>

    {{-- cta section --}}
    <section class="mb-[168px]">
        <div class="container-init flex justify-between items-center">
            <div class="text-center md:text-left">
                <h2 class="font-bold text-neutral-800 text-2xl mb-6">
                    Browse Our Fashion Paradise!
                </h2>
                <p class="text-neutral-600 text-sm md:mb-8 mb-6 w-3/4 mx-auto md:mx-0">
                    Step into a world of style and explore our diverse
                    collection of clothing categories.
                </p>
                <button class="btn-dark flex gap-2 items-center mx-auto md:mx-0">
                    <p>Start Browsing</p>
                    <img src="{{ asset('icons/right.svg') }}" alt="" />
                </button>
            </div>
            <div class="h-[311px] w-[225px] md:block hidden">
                <img src="{{ asset('images/cta-image.png') }}" alt="" class="w-fit" />
            </div>
        </div>
    </section>

    {{-- latest section --}}
    <section class="md:mb-[168px] mb-11">
        <div class="container-init">
            <div class="text-center mb-10">
                <h2 class="font-bold text-neutral-900 text-2xl">
                    Lates Product
                </h2>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
                <x-product_card image="images/latest1.png" name="Elegant Ebony Sweatshirts" status="IN STOCK"
                    price="35.00" />
                <x-product_card image="images/latest2.png" name="Sleek and Cozy Black" status="IN STOCK" price="57.00" />
                <x-product_card image="images/latest3.png" name="Raw Black Tees" status="IN STOCK" price="19.00" />
                <x-product_card image="images/latest4.png" name="MOCKUP Black" status="IN STOCK" price="30.00" />
            </div>
        </div>
    </section>

    {{-- suscribe section --}}
    <section class="mb-11 w-full bg-neutral-100">
        <div class="container-init flex flex-col md:flex-row justify-between items-center py-14">
            <div class="text-center md:text-left mb-6 md:mb-0">
                <h2 class="font-bold text-neutral-800 text-2xl mb-6">
                    Join Our Newsletter
                </h2>
                <p class="text-neutral-600 text-sm w-3/4 md:w-full mx-auto md:mx-0">
                    We love to surprise our subscribers with occasional
                    gifts.
                </p>
            </div>
            <form action="" class="flex gap-2 flex-col lg:block">
                <input type="text" placeholder="Your email address" name="" id=""
                    class="py-[10px] px-5 border border-neutral-100 rounded-md" />
                <button class="btn-dark">
                    <p>Subscribe</p>
                </button>
            </form>
        </div>
    </section>
@endsection
