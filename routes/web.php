<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\GalleryController;


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

Route::get('/cakeinput', function () {
    return view('cake/cakeinput');
})->name('cakeinput');

Route::get('/admindb', function () {
    return view('admin/index');
})->name('index');


Route::get('/addsupplier', function () {
    return view('supplier/addsupplier');
})->name('addsupplier');

//Route::get('/galleryManagement', f[App\Http\Controllers\GalleryController::class,'store'])->name('galleryshow');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::post('store',[App\Http\Controllers\GalleryController::class,'store']);


Route::post('store',[App\Http\Controllers\SupplierController::class,'store']);

Route::get('/galleryManagement', [App\Http\Controllers\GalleryController::class, 'index'])->name('galleryshow');
Route::get('/galleryinput', [App\Http\Controllers\GalleryController::class,'create'])->name('galleryinput');
Route::get('show/{gallery}', [App\Http\Controllers\GalleryController::class,'show'])->name('show');
Route::get('edit/{gallery}', [App\Http\Controllers\GalleryController::class,'edit'])->name('edit');
Route::put('edit/{gallery}', [App\Http\Controllers\GalleryController::class,'update'])->name('update');
Route::delete('/{gallery}', [App\Http\Controllers\GalleryController::class,'destroy'])->name('destroy');


Route::get('/supplierManagement', [App\Http\Controllers\SupplierController::class, 'index'])->name('suppliershow');
Route::get('/addsupplier', [App\Http\Controllers\SupplierController::class,'create'])->name('addsupplier');
Route::get('show/{supplier}', [App\Http\Controllers\SupplierController::class,'show'])->name('supplier.show');
