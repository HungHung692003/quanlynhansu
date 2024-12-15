<?php

use App\Http\Controllers\API\APIAdmiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'  =>  '/admin'], function() {
    Route::post('/create', [APIAdmiController::class, 'store'])->name('adminStore');
    Route::get('/data', [APIAdmiController::class, 'data'])->name('adminData');
    Route::post('/del', [APIAdmiController::class, 'destroy'])->name('adminDel');
    Route::post('/update', [APIAdmiController::class, 'update'])->name('adminUpdate');
    Route::post('/block', [APIAdmiController::class, 'block'])->name('taiKhoanAdminBlock');
});
