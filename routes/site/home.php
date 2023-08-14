<?php

use App\Models\Admin\User as AUser;

Route::get('/', function () {
    return view('site.pages.home');
})->name('home');
