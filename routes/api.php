<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use Illuminate\Support\Facades\Auth;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('login',[AuthController::class,'login']);

Route::post('logout',[AuthController::class,'logout']);

Route::post('register',[AuthController::class, 'register']);

Route::get('products', [AuthController::class, 'getAllProducts']);

Route::get('products/{id}', [AuthController::class, 'getProduct']);

Route::post('products', [AuthController::class, 'createProduct']);

Route::put('products/{id}', [AuthController::class, 'updateProduct']);

Route::delete('products/{id}', [AuthController::class, 'deleteProduct']);

