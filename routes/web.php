<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/datapenjualan', function () {
    return view('admin.datapenjualan');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboardadmin');
    });
});

    // Route::get('/','DashboardController@index');
