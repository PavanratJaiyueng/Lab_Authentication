<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserControllerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('Product', ProductController::class);

Route::resource('Product',ProductController::class)->middleware('auth:sanctum');

Route::post('/login', [UserControllerController::class, 'store']);

Route::middleware('auth:sanctum')->delete('/logout/{user}', [UserControllerController::class, 'destroy']);
