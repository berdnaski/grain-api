<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\Restaurant\RestaurantController;
use App\Http\Controllers\User\Product\ProductController;
use App\Http\Controllers\User\Category\CategoryController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/restaurants', RestaurantController::class)->except(['create', 'edit']);
    Route::get('api/restaurants/{id}/products', [ProductController::class, 'index']);
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



