<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/product-list', function () {
    return view('product-list');
})->name('product-list');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/order-history', function () {
    return view('order-history');
})->name('order-history');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
