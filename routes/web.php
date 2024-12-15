<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return view('home');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::get('/produts-tampil', [ProductController::class, 'tampil_product'])->name('tampil');



Route::view('/login', 'login')->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'authenticate']);
Route::get('/home', function () {
    return view('home'); // Sesuaikan dengan tampilan homepage Anda
})->name('home');


// Dashboard route
// Admin Dashboard Route
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard'); // Sesuaikan nama view ini
})->name('admin.dashboard');


Route::get('/admin/orders', function () {
    return view('admin.orders'); // Sesuaikan dengan nama view
})->name('admin.orders');


Route::get('/admin/products', function () {
    return view('admin.products'); // Pastikan nama view-nya benar
})->name('admin.products');

Route::get('/about', function () {
    return view('about');
});




