@extends('layouts.app')

@section('title', 'Katalog')

@section('content')
<h2 class="text-2xl font-bold mb-4">Koleksi Digital Art </h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($products as $product)
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="{{ asset('images/' . $product['image']) }}" class="w-full h-48 object-cover rounded-lg">
            <h3 class="text-xl font-bold mt-2">{{ $product['name'] }}</h3>
            <p class="text-gray-600">Rp{{ number_format($product['price']) }}</p>
        </div>
    @endforeach
</div>
@endsection
