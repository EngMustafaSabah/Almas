<?php

use App\Models\Site\Page;

Route::get('/about', function () {
    return view('site.pages.about');
})->name('about');
