<?php

use App\Helpers\GHelper;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('/')->group(function () {
    GHelper::requireFilesInDir(
        GHelper::getFilesNameInDir(__DIR__ . '/site')
    );
});


Route::get('/dashboard', function () {
    GHelper::requireFilesInDir(
        GHelper::getFilesNameInDir(__DIR__ . '/admin')
    );
    return view('admin.index');
});
