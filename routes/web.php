<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DSnhnvienaController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function () {

    Route::group(['prefix'  =>  '/admin'], function() {
        Route::get('/', [AdminController::class, 'index']);
    });



    Route::group(['prefix'  =>  '/danh-sach'], function() {
        Route::get('/', [DSnhnvienaController::class, 'index']);
    });

    Route::group(['prefix'  =>  '/chi-tiet-NV'], function() {
        Route::get('/', [DSnhnvienaController::class, 'index']);
    });
});
