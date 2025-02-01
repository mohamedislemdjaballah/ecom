<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WareHouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RegisterController;
use app\Http\Controllers\LoginController;
use app\Http\Controllers\LogoutController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'prefix' => 'v1',
    'namespace' => 'App\Http\Controllers'
], function () {
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

// Route::controller(LoginController::class)->group(function () {
//     Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
// });

// Route::controller(LogoutController::class)->group(function () {
//     Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
// });

Route::prefix('v1')->group(function () {
    Route::apiResource('warehouses', WareHouseController::class);
    Route::apiResource('products', ProductController::class);
    
});