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

Route::prefix('/')->namespace('Site')->group(function () {
    GHelper::requireFilesInDir(
        GHelper::getFilesNameInDir(__DIR__ . '/site')
    );
});

Route::prefix('/dashboard')->name('dashboard.')->namespace('App\Http\Controllers\Admin')->group(function () {
    
    Route::get('/', function () {
        return view('admin.index');
    })->name('home');

    Route::get('/forms', function () {
        return view('admin.forms');
    });
    Route::get('/tables', function () {
        return view('admin.tables');
    });
    Route::get('/cards', function () {
        return view('admin.cards');
    });
    Route::get('/tabs', function () {
        return view('admin.tabs');
    });
    Route::get('/alert-pagination', function () {
        return view('admin.alert-pagination');
    });

    GHelper::requireFilesInDir(
        GHelper::getFilesNameInDir(__DIR__ . '/admin')
    );
});

// Route::get('/', function () {
    // GHelper::requireFilesInDir(
    //     GHelper::getFilesNameInDir(__DIR__ . '/admin')
    // );
    // return view('admin.index');
// });

/*
Users Table:
    id (Primary Key)
    username
    email
    Password
    Name
    Address_id
    Phone
    is_verified
Pages table
	Id
	Name
	Slug
    status
Sections Table
   	id
    name
   	title
    second_title
    section_content
    page_id
    section_order
    parent_id
    status
    url
Menus Table
    id
    menu_name
    Slug
    status
MenuItems Table
    id
    menu_id
    parent_item_id
    item_label
    item_url
    Slug
    order
Addresses table
    Id
    Name
    Street
    City
    City_id
    country
    country_id
    url
    Lat
    Long
    user_id
*/