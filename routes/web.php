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

// Route Dasar

Route::get('/welcome', function () {
    return "Selamat Datang";
});

Route::get('/beranda/news', function () {
    return "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
});

// Route Dengan view

Route::get('/berita', function () {
    return view('user.berita.index');
});

Route::get('/berita/detail', function () {
    return view('user.berita.show');
});


// Route Dengan Prefix
Route::prefix('admin')->group(function () {

    // Dashboard
    Route::get('./dashboard', function () {
        return view('admin.dashboard.index');
    });

    // Dashboard
    Route::get('./settings', function () {
        return view('admin.settings.index');
    });

    // Dashboard
    Route::get('./reports', function () {
        return view('admin.report.index');
    });

    // Dashboard
    Route::get('./user', function () {
        return view('admin.user');
    });

    // News
    Route::get('./news', function () {
        return view('admin.news.index');
    });

    // News > Create
    Route::get('./news/create', function () {
        return view('admin.news.create');
    });

    // News > Edit
    Route::get('./news/edit', function () {
        return view('admin.news.edit');
    });

    // News > 
    Route::get('./news/show', function () {
        return view('admin.news.show');
    });
});
