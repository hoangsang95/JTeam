<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('trangchu', function () {
    return view('layouts.index');
});

Route::get('product', function () {
    return view('layouts.product');
});

Route::get('checkout', function () {
    return view('layouts.checkout');
});

Route::get('product_cart', function () {
    return view('layouts.product_cart');
});

Route::get('product_compare', function () {
    return view('layouts.product_compare');
});

Route::get('product_list', function () {
    return view('layouts.product_list');
});

Route::get('wishlist', function () {
    return view('layouts.wishlist');
});
