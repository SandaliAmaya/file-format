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
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('signup', function () {
    return view('auth.register');
})->name('signup');

Route::get('create-file-format', function () {
    return view('file-format.create');
});

Route::get('dashboard', function () {
    return view('file-format.dashboard');
});

Route::get('file-formats', function () {
    return view('file-format.list');
});

Route::get('file-format/{id}', function () {
    return view('file-format.single-view');
});

Route::get('products', function () {
    return view('file-format.list');
});

Route::get('sidebar', function () {
    return view('components.sidebar');
});
