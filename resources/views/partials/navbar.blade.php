<nav class="sticky top-0 inset-x-0 z-50 bg-white w-full">
    <div class="container-init flex justify-between items-center h-[84px] text-neutral-900">
        <div class="flex items-center gap-2">
            <div><img src="{{ asset('images/logo.png') }}" alt="" /></div>
            <p class="text-xl font-extrabold">Ecommerce</p>
        </div>
        <div class="lg:block hidden">
            <ul class="flex gap-8 text-neutral-500 text-sm">
                <li>Home</li>
                <li>Categories</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </div>
        <div class="lg:flex items-center gap-8 hidden">
            <form action="">
                <input type="text" placeholder="Search products" name="" id="" class="input" />
            </form>
            <a href=""><img src="{{ asset('icons/cart.svg') }}" alt="" /></a>
            <a href=""><img src="{{ asset('icons/user.svg') }}" alt="" /></a>
        </div>
        <div class="lg:hidden block">
            <img src="{{ asset('icons/Menu.svg') }}" alt="" />
        </div>
    </div>
</nav>
