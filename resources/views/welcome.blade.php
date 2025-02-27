<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-white">
    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-red-500">Laravel</h1>
            <p class="text-gray-300 mt-4">
                Laravel has wonderful, thorough documentation covering every aspect of the framework.
            </p>
            <div class="grid grid-cols-2 gap-4 mt-6">
                <a href="https://laravel.com/docs" class="bg-gray-800 p-4 rounded-lg">Documentation</a>
                <a href="https://laracasts.com" class="bg-gray-800 p-4 rounded-lg">Laracasts</a>
                <a href="https://laravel-news.com" class="bg-gray-800 p-4 rounded-lg">Laravel News</a>
                <a href="https://forge.laravel.com" class="bg-gray-800 p-4 rounded-lg">Vibrant Ecosystem</a>
            </div>
        </div>
    </div>
</body>
</html>
