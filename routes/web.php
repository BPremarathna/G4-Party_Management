<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('home.welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/contact', function () {
    return view('contactus/contact');
})->name('contact');

Route::get('/birthday', function () {
    return view('birthday/birthday');
})->name('birthday');

Route::get('/engage', function () {
    return view('engage/engage');
})->name('engage');

Route::get('/cake', function () {
    return view('cake/cake');
})->name('cake');

Route::get('/gallery', function () {
    return view('gallery/gallery');
})->name('gallery');

Route::get('/photo', function () {
    return view('photography/photo');
})->name('photo');

Route::get('/venue', function () {
    return view('venue/venue');
})->name('venue');

Route::get('/invitationcards', function () {
    return view('invitation/icard');
})->name('icard');

Route::get('/customtool', function () {
    return view('invitation/custom');
})->name('custom');

Route::get('/decoration', function () {
    return view('decoration/decoration');
})->name('decoration');

Route::get('/entertainment', function () {
    return view('entertain/entertain');
})->name('entertain');

Route::get('/bookingstart', function () {
    return view('booking/booking');
})->name('booking');

Route::get('/galleryinput', function () {
    return view('gallery/galleryinput');
})->name('galleryinput');

Route::get('/cakeinput', function () {
    return view('cake/cakeinput');
})->name('cakeinput');

Route::get('/admindb', function () {
    return view('admin/index');
})->name('index');

Route::get('/addsupplier', function () {
    return view('admin/addsupplier');
})->name('addsupplier');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::post('store',[App\Http\Controllers\GalleryController::class,'store']);

Route::post('store',[App\Http\Controllers\SupplierController::class,'store']);
