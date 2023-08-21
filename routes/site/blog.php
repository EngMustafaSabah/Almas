<?php

use App\Models\Site\Blog;
use Illuminate\Http\Request;


// Route::get('/blog', '@index')->name('blog');
Route::resource('/blog', BlogController::class);
// Route::post('/contact', function (Request $request) {
//     $data = $request->validate([
//         'name' => 'required',
//         'email' => 'required|email',
//         'message' => 'required',
//     ]);
//     Mail::to('info@almas.com')->send(new ContactFormMail($data));

//     return redirect()->back()->with('success', 'Your message has been sent.');
// })->name('contact.submit');
