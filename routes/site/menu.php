<?php

Route::get('/', function () {
    return view('site.pages.home');
})->name('home');
