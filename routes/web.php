<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sidebar_nav', function () {
    return view('sidebar_nav');
})->name('sidebar_nav');

