<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/catalog', function () {
    $products = [
        ["name" => "Digital Sunset", "price" => 150000, "image" => "art1.jpg"],
        ["name" => "Orion", "price" => 200000, "image" => "art2.png"],
        ["name" => "WGG", "price" => 1000000, "image" => "art3.jpg"],
        ["name" => "Phoenix Wright", "price" => 150000, "image" => "art4.jpg"],
        ["name" => "A Warrior", "price" => 200000, "image" => "art5.jpg"],
        ["name" => "Console Sketch", "price" => 180000, "image" => "art6.jpg"],
        ["name" => "People Sketch", "price" => 180000, "image" => "art7.jpg"]
    ];
    
    return view('catalog', compact('products'));
})->name('catalog');
Route::get('/about', function () {
    return view('about');
})->name('about');
