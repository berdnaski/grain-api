<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\Restaurant\RestaurantController;

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
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:sanctum');
    Route::resource('/restaurants', RestaurantController::class)->except(['create', 'edit']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


