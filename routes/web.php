<?php

use Illuminate\Support\Facades\Route;

// Trang chủ
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');

// Các trang sản phẩm, tin tức, liên hệ
Route::get('/product', function () {
    return view('pages.product');  // Sửa lại chỉ còn 1 route cho /product
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

// Admin routes
Route::get('/admin', 'App\Http\Controllers\AdminController@index'); // Trang đăng nhập admin
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard'); // Trang dashboard admin
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard'); // Xử lý đăng nhập admin
Route::get('/logout','AdminController@logout');