<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
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
Route::middleware(['api'])
    ->group(function (){

        Route::prefix('subject')->group(function (){
            Route::get('/index', [App\Http\Controllers\SubjectController::class, 'index']);
            Route::post('/create', [App\Http\Controllers\SubjectController::class, 'create']);
            Route::get('/show/{id}', [App\Http\Controllers\SubjectController::class, 'show']);
            Route::put('/update/{id}', [App\Http\Controllers\SubjectController::class, 'update']);
            Route::delete('/destroy/{id}', [App\Http\Controllers\SubjectController::class, 'destroy']);
        });
    });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
