<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Digital Art Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-red-950 p-4 text-white flex justify-between">
        <a href="{{ route('home') }}" class="text-xl font-bold">Digital Art Shop</a>
        <div>
            <a href="{{ route('catalog') }}" class="mr-4">Catalog</a>
            <a href="{{ route('about') }}">Tentang</a>
        </div>
    </nav>

    <div class="container mx-auto mt-8 p-4">
        @yield('content')
    </div>

    <footer class="bg-gray-900 text-white py-6 mt-16">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="h-10">
            <span class="text-lg font-semibold">Daryanto Tanawi C14230174</span>
        </div>
        <p class="text-center text-sm mt-4 md:mt-0">&copy; 2024 Digital Art Shop. All rights reserved. Dah Proffesional Banget ni.</p>
        <div class="flex space-x-4 mt-4 md:mt-0">
            <a href="mailto:daryantotanawi1098@gmail.com" class="hover:text-gray-400">Email</a>
            <a href="https://instagram.com/xcalbr_0517" class="hover:text-gray-400">Instagram</a>
        </div>
    </div>
</footer>
</body>
</html>
