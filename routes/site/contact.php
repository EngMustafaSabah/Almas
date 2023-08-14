<?php

use App\Mail\Site\ContactFormMail;
use App\Models\Site\Page;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


Route::get('/contact', function () {
    $section = Page::where('slug', 'contact')->with('sections')->first()['sections'];
    return view(
        'site.pages.contact',
        ['sections' => $section]
    );
})->name('contact');

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    Mail::to('info@almas.com')->send(new ContactFormMail($data));

    return redirect()->back()->with('success', 'Your message has been sent.');
})->name('contact.submit');
