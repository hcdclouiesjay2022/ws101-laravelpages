<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-black p-4 text-white flex items-center justify-between">
        <div class="text-lg font-serif font-mono">Miracles</div>
        <div class="absolute left-1/2 transform -translate-x-1/2 flex space-x-8">
            <a href="/" class="hover:underline">Home</a>
            <a href="/about" class="hover:underline">About</a>
            <a href="/contact" class="hover:underline">Contact</a>
        </div>
    </nav>
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        @yield('content')
    </div>
</body>
</html>
