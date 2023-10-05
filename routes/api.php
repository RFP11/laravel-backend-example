<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foodController;
use App\Http\Controllers\drinkController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

Route::prefix('food')->group(function(){
    Route::get('/', [foodController::class, 'index']);
    Route::post('/', [foodController::class, 'push']);
    Route::delete('/{id}', [foodController::class, 'pop']);
    Route::get('/{id}', [foodController::class, 'byId']);
    Route::put('/{id}', [foodController::class, 'update']);
});

Route::prefix('drink')->group(function(){
    Route::get('/', [drinkController::class, 'index']);
    Route::post('/', [drinkController::class, 'push']);
    Route::get('/{id}', [drinkController::class, 'byId']);
});
