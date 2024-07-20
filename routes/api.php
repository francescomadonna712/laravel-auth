<?php

use App\Http\Controllers\Admin\BoolfolioController;
use App\Http\Controllers\Api\BoolfolioController as ApiBoolfolioController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('boolfolio', [ApiBoolfolioController::class, 'index']);

//risponde a api/data
Route::get('data', [BoolfolioController::class, 'index']);
