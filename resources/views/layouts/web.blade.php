<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- livewireStyles --}}
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <div class="flex p-2 px-10 justify-between font-bold">
            <div class="">
                <a href="{{ route("home") }}">Home</a>
            </div>
            <div class="space-x-4">
                <a href="{{ route("login") }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </div>

        </div>

        <main>
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>

</html>