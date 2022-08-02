<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaisseController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\CommercialController;

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

Route::resource('caisses', CaisseController::class);
Route::resource('commercials', CommercialController::class);
Route::resource('productions', ProductionController::class);
Route::resource('releves', ReleveController::class);