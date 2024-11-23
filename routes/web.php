<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    require_once __DIR__ . '/admin.php';
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

