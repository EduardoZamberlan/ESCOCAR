<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/payment', function () {
    return view('payment');
});
