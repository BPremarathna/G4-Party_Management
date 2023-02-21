<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DecorationController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\PhotographController;

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
Route::post('/store1',[App\Http\Controllers\DecorationController::class,'store']);
Route::post('/store2',[App\Http\Controllers\EntertainmentController::class,'store']);
Route::post('/store4',[App\Http\Controllers\CakeController::class,'store']);
Route::post('/store5',[App\Http\Controllers\PhotographController::class,'store']);
Route::post('/store6',[App\Http\Controllers\InvitationController::class,'store']);
Route::post('/store7',[App\Http\Controllers\VenueController::class,'store']);

Route::get('/galleryManagement', [App\Http\Controllers\GalleryController::class, 'index'])->name('galleryshow');
Route::get('/galleryinput', [App\Http\Controllers\GalleryController::class,'create'])->name('galleryinput');
Route::get('show/{gallery}', [App\Http\Controllers\GalleryController::class,'show'])->name('show');
Route::get('edit/{gallery}', [App\Http\Controllers\GalleryController::class,'edit'])->name('edit');
Route::put('edit/{gallery}', [App\Http\Controllers\GalleryController::class,'update'])->name('update');
Route::delete('/{gallery}', [App\Http\Controllers\GalleryController::class,'destroy'])->name('destroy');


Route::get('/supplierManagement', [App\Http\Controllers\SupplierController::class, 'index'])->name('suppliershow');
Route::get('/addsupplier', [App\Http\Controllers\SupplierController::class,'create'])->name('addsupplier');
Route::get('show/{supplier}', [App\Http\Controllers\SupplierController::class,'show'])->name('supplier.show');
Route::delete('/{supplier}', [App\Http\Controllers\SupplierController::class,'destroy'])->name('destroy');

Route::get('/decoinput', [App\Http\Controllers\DecorationController::class,'create'])->name('decoinput');
Route::get('/decoManagement', [App\Http\Controllers\DecorationController::class, 'index'])->name('decoshow');
Route::get('show1/{decoration}', [App\Http\Controllers\DecorationController::class,'show'])->name('show1');
Route::get('edit1/{decoration}', [App\Http\Controllers\DecorationController::class,'edit'])->name('edit1');
Route::put('edit1/{decoration}', [App\Http\Controllers\DecorationController::class,'update'])->name('update');

Route::get('/entertaininput', [App\Http\Controllers\EntertainmentController::class,'create'])->name('entertaininput');
Route::get('/entertainManagement', [App\Http\Controllers\EntertainmentController::class, 'index'])->name('entertainshow');
Route::get('show2/{entertain}', [App\Http\Controllers\EntertainmentController::class,'show'])->name('show2');


Route::get('/cakeinput', [App\Http\Controllers\CakeController::class,'create'])->name('cakeinput');
Route::get('/cakeManagement', [App\Http\Controllers\CakeController::class, 'index'])->name('cakeshow');
Route::get('show4/{cake}', [App\Http\Controllers\CakeController::class,'show'])->name('show4');
Route::get('edit4/{cake}', [App\Http\Controllers\CakeController::class,'edit'])->name('edit4');
Route::put('edit4/{cake}', [App\Http\Controllers\CakeController::class,'update'])->name('update');
Route::delete('/{cake}', [App\Http\Controllers\CakeController::class,'destroy'])->name('destroy');

Route::get('/photoinput', [App\Http\Controllers\PhotographController::class,'create'])->name('photoinput');
Route::get('/photoManagement', [App\Http\Controllers\PhotographController::class, 'index'])->name('photoshow');
Route::get('show5/{photograph}', [App\Http\Controllers\PhotographController::class,'show'])->name('show5');

Route::get('/cardinput', [App\Http\Controllers\InvitationController::class,'create'])->name('cardinput');
Route::get('/cardManagement', [App\Http\Controllers\InvitationController::class, 'index'])->name('cardshow');
Route::get('show6/{invitation}', [App\Http\Controllers\InvitationController::class,'show'])->name('show6');

Route::get('/venueinput', [App\Http\Controllers\VenueController::class,'create'])->name('venueinput');
Route::get('/venueManagement', [App\Http\Controllers\VenueController::class, 'index'])->name('venueshow');
Route::get('show7/{venue}', [App\Http\Controllers\VenueController::class,'show'])->name('show7');

