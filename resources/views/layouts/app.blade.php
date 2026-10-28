<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="min-h-screen">
    <div class="mx-auto max-w-8xl">
        @include('partials.header')
        <main class="p-8 min-h-screen w-full">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
    @stack('scripts')
</body>
</html>