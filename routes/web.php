<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminBukuController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin/databuku', function () {
    return view('admin.datapenjualan');
});

Route::get('/data-buku', [HomeController::class, 'dataBuku'])->name(name: 'data.buku');
Route::get('/checkout/{id}', [HomeController::class, 'checkout'])->name(name: 'checkout');
Route::post('/process-checkout', [HomeController::class, 'precessCheckout'])->name(name: 'checkout.process');


Route::get('/admin/penjualan', [AdminController::class, 'penjualan'])->name('admin.penjualan');
Route::get('/admin/buku', [AdminController::class, 'buku'])->name('admin.buku');
Route::get('/admin/penerbitan', [AdminController::class, 'penerbitan'])->name('admin.penerbitan');
Route::get('/admin/author', [AdminController::class, 'author'])->name('admin.author');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboardadmin');
    });
    Route::resource('buku', AdminBukuController::class);

});

// routes/api.php


    // Route::get('/','DashboardController@index');