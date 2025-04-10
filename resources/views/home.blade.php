@extends('layouts.app')

@section('content')
<div class="relative w-full h-screen flex items-center justify-center bg-gray-900">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image" class="w-full h-full object-cover opacity-50">
    </div>
    <h1 class="text-white text-5xl md:text-7xl font-bold relative z-10">Digital Art Shop</h1>
</div>

<div class="py-16 px-6 text-center bg-white">
    <h2 class="text-3xl md:text-4xl font-semibold text-gray-800">Selamat Datang</h2>
    <p class="mt-4 text-gray-600 text-lg">Temukan berbagai karya seni digital terbaik hanya di sini :D.</p>
</div>
@endsection
