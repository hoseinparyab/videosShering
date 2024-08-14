<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\v1\VideoController ;
use Doctrine\DBAL\Logging\Middleware;
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

Route::prefix('v1')->group(function(){

    Route::get('videos/{video:slug}',[VideoController::class,'show']);
    Route::get('videos',[VideoController::class,'index']);
    Route::get('auth/me',[AuthController::class,'me'])-> middleware('auth:sanctum');
    Route::get('auth/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
});

Route::post('v1/auth/login',[AuthController::class,'login']);
