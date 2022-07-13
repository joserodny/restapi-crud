<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersDataController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [UsersDataController::class, 'index']);
Route::get('/users/{usersData}', [UsersDataController::class, 'show']);
Route::post('/create', [UsersDataController::class, 'store']);
Route::put('/update/{usersData}', [UsersDataController::class, 'update']);
Route::delete('/delete/{usersData}', [UsersDataController::class, 'destroy']);
