<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('password/email', 'App\Http\Controllers\Api\ForgotPasswordController@forgot');

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::post('/auth/valida',[\App\Http\Controllers\Api\AuthController::class, 'valida']);


});


Route::post('/auth/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/auth/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/auth/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);


