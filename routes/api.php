<?php

use App\Http\Controllers\DogController;
use App\Http\Controllers\UserDogController;
use App\Http\Controllers\WalkController;
use Illuminate\Http\Request;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users.dogs', UserDogController::class);
Route::apiResource('walks', WalkController::class);
Route::apiResource('dogs', DogController::class);