<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/register-tenant', function () {
    return view('RegisterTenant');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/fines', function () {
    return view('fines');
});
