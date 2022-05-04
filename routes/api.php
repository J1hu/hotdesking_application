<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/user/{id}', [UserController::class, 'get']);

Route::get('/bookings', [BookingController::class, 'index']);
Route::post('/booking', [BookingController::class, 'create']);
Route::put('/booking/{id}', [BookingController::class, 'update']);
Route::delete('/booking/{id}', [BookingController::class, 'delete']);

// Route::group(['middleware' => ['validateToken']], function () {
// });
