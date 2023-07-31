<?php

Route::get('/about', function () {
    return view('site.pages.about');
})->name('about');
