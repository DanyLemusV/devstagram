<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram - @yield('titulo')</title>
        @vite('resources/css/app.css')
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
        <body class="bg-gray-100">
        </body>
</html>
