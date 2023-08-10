<?php

use App\Http\Controllers\ActiveController;
use App\Http\Controllers\ProjectController;
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
Route::middleware(['auth:sanctum'])->group(function (){
    Route::controller(ProjectController::class)->group(function (){
        Route::get('projects', 'index');
        Route::post('/projects', 'store');
        Route::get('/projects/{id}', 'show');
        Route::put('/projects/{id}', 'update');
        Route::delete('/projects/{id}', 'destroy');
    });
    Route::controller(ActiveController::class)->group(function (){
        Route::get('actives', 'index');
        Route::post('/actives', 'store');
        Route::get('/actives/{id}', 'show');
        Route::put('/actives/{id}', 'update');
        Route::delete('/actives/{id}', 'destroy');
    });
});
