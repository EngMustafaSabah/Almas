<?php

use App\Helpers\GHelper;
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
    $routesFiles = GHelper::getFilesNameInDir(__DIR__ . '/site');
    GHelper::requireFilesInDir($routesFiles);

    return view('site.welcome');
});

Route::get('/dashboard', function () {
    $routesFiles = GHelper::getFilesNameInDir(__DIR__ . '/admin');
    GHelper::requireFilesInDir($routesFiles);
    return view('admin.index');
});
