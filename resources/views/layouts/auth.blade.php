<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', env('APP_NAME'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/main.sass'])
</head>
<body class="antialiased">
    <main class="md:min-h-screen md:flex md:items-center md:justify-center py-16 lg:py-20">
    <div class="container">

        <!-- Page heading -->
        <div class="text-center">
            <a href="{{route('home')}}" class="inline-block" rel="home">
                <img src="{{\Illuminate\Support\Facades\Vite::image('logo.png')}}" class="w-[148px] md:w-[201px] h-[50px] md:h-[201px]" alt="Bon-store">
            </a>
        </div>

    @yield('content')
        </div>
    </main>
</body>
</html>
