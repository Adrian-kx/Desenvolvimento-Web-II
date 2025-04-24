<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-gray-50 text-gray-800 flex items-center justify-center min-h-screen">
        <main class="text-center">
            <h1 class="text-xl font-medium mb-3">Bem-vindo ao Laravel</h1>
            <p class="text-gray-500 mb-4">Explore a documentação e comece a construir algo incrível.</p>
            <a href="https://laravel.com/docs" class="text-blue-600 hover:underline">Documentação</a>
        </main>
    </body>
</html>
