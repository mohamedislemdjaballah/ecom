<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WareHouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::apiResource('warehouses', WareHouseController::class);
    Route::apiResource('products', ProductController::class);
    
});