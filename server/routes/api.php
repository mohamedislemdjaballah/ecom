<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WareHouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LogoutController::class, 'logout']);
});

Route::prefix('v1')->group(function () {
    Route::apiResource('warehouses', WareHouseController::class);
    Route::apiResource('products', ProductController::class);
    
});