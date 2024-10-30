<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    {{-- promo --}}
    <div class="w-full bg-neutral-900 h-10 text-white text-sm flex justify-center items-center gap-1">
        <p>Get 25% OFF on your first order.</p>
        <a href="">Order Now</a>
    </div>

    {{-- navbar --}}
    @include('partials.navbar')

    {{-- main --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')
</body>

</html>
