<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;

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

Route::post('login' , [UserController::class , 'login']);
Route::get('/guestPost' , [PostController::class , 'guestPost']);
Route::get('post' , [PostController::class , 'index']);

// Route::group(['prefix' => 'post' , 'middleware' => 'auth:sanctum'], function() {
    
// });
// Route::apiResource('users', UserController::class);
// Route::apiResource('posts', PostController::class);

