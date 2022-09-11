<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\Frontend\LandingPageController::class,'index'])->name('index');
Route::get('/login',[App\Http\Controllers\Frontend\LandingPageController::class,'login'])->name('frontend.login');
Route::get('/daftar',[App\Http\Controllers\Frontend\LandingPageController::class,'regis'])->name('frontend.daftar');
Route::get('/data/{id}',[App\Http\Controllers\Frontend\LandingPageController::class,'editbiodata'])->name('frontend.edit');
Route::get('/dokumen/{id}',[App\Http\Controllers\Frontend\LandingPageController::class,'dokumen'])->name('frontend.dokumen');

Route::put('/updatedata/{id}',[App\Http\Controllers\Frontend\RegistrasiVendorController::class,'updatedata'])->name('frontend.update');
Route::post('/uploaddokumen',[App\Http\Controllers\Frontend\RegistrasiVendorController::class,'uploaddokumen'])->name('frontend.upload.dokumen.user');
Route::post('/store',[App\Http\Controllers\Frontend\RegistrasiVendorController::class,'store'])->name('frontend.store.user');

Route::get('/admin',[App\Http\Controllers\Backend\AuthController::class,'login'])->name('backend.login');
Route::post('/authenticate',[App\Http\Controllers\Backend\AuthController::class,'auth'])->name('backend.authenticate');
Route::post('/logout',[App\Http\Controllers\Backend\AuthController::class,'logout'])->name('logout');



Route::group(['middleware' => ['is_role:1']], function () {
    Route::get('/administrator', [App\Http\Controllers\Backend\DashboardController::class, 'administrator'])->name('backend.admin');
    Route::get('/vendors', [App\Http\Controllers\Backend\VendorController::class, 'index'])->name('backend.admin.vendor');
    Route::get('/validate/{id}', [App\Http\Controllers\Backend\VendorController::class, 'validasi'])->name('backend.admin.vendor.validasi');
    Route::get('/confirm/{id}', [App\Http\Controllers\Backend\VendorController::class, 'confirmasiData'])->name('backend.admin.vendor.konfimasi');
    Route::post('/email',[App\Http\Controllers\Backend\VendorController::class, 'email'])->name('backend.admin.email');


    Route::get('/downloadnpwp/{npwp}', [App\Http\Controllers\Backend\VendorController::class, 'downloadDokumenNPWP'])->name('download.npwp');
    Route::get('/downloadakta/{akta}', [App\Http\Controllers\Backend\VendorController::class, 'downloadDokumenAkta'])->name('download.akta');
    Route::get('/downloadindukusaha/{induk}', [App\Http\Controllers\Backend\VendorController::class, 'downloadDokumenIndukUsaha'])->name('download.induk');
    Route::get('/downloadsuratpernyataan/{pernyataan}', [App\Http\Controllers\Backend\VendorController::class, 'downloadSuratPernyataan'])->name('download.pernyataan');
    Route::get('/downloadsuratpendaftaran/{pendaftaran}', [App\Http\Controllers\Backend\VendorController::class, 'downloadSuratPendaftaran'])->name('download.pendaftaran');
    Route::get('/downloadworkshop/{workshop}', [App\Http\Controllers\Backend\VendorController::class, 'downloadFotoWorkshop'])->name('download.wokrshop');


    Route::get('/user',[App\Http\Controllers\Backend\UserController::class, 'index'])->name('backend.admin.user');
    Route::get('/adduser',[App\Http\Controllers\Backend\UserController::class, 'tambahuser'])->name('backend.add.user');
    Route::post('/storeuser',[App\Http\Controllers\Backend\UserController::class, 'storeuser'])->name('backend.store.user');


    Route::get('/lelang',[App\Http\Controllers\Backend\LelangController::class, 'index'])->name('backend.admin.lelang');
    Route::get('/addlelang',[App\Http\Controllers\Backend\LelangController::class, 'tambahlelang'])->name('backend.add.lelang');
    Route::post('/storelelang',[App\Http\Controllers\Backend\LelangController::class, 'simpanlelang'])->name('backend.store.lelang');
});
Route::group(['middleware' => ['is_role:2']], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'user'])->name('backend.user');
});
