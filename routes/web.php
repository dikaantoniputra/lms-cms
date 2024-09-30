<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', function () {
    return view('lms.page.login');
});


Route::get('/', function () {
    return view('lms.page.index');
});

Route::get('/lms', function () {
    return view('lms.page.index2');
});

Route::get('/course', function () {
    return view('lms.page.course');
});

Route::get('/course-detail', function () {
    return view('lms.page.detail-course');
});

Route::get('/create-mentor', function () {
    return view('lms.page.mentor-daftar');
});

Route::get('/mentor-detail', function () {
    return view('lms.page.mentor-detail');
});

Route::get('/mentor', function () {
    return view('lms.page.mentor');
});

Route::get('/cart', function () {
    return view('lms.page.cart');
});

Route::get('/checkout', function () {
    return view('lms.page.checkout');
});


Route::get('/about', function () {
    return view('lms.page.about');
});

Route::get('/contact', function () {
    return view('lms.page.contact');
});

Route::get('/blog', function () {
    return view('lms.page.blog');
});

Route::get('/blog-detail', function () {
    return view('lms.page.detail-blog');
});


