<?php

// routes/web.php
// Daftarkan semua halaman di sini

use Illuminate\Support\Facades\Route;

// Halaman Profile (halaman utama)
Route::get('/', function () {
    return view('profile');
});

Route::get('/profile', function () {
    return view('profile');
});

// Halaman About
Route::get('/about', function () {
    return view('about');
});

// Halaman Porto
Route::get('/porto', function () {
    return view('porto');
});

// Halaman Contact
Route::get('/contact', function () {
    return view('contact');
});