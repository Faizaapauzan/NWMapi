<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;

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

Route::post('/login', [AuthController::class, 'login']);
Route::get('/job', [HomepageController::class, 'index']);
Route::get('/will', [HomepageController::class, 'will']);


// Homepage routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/todosatus', [HomepageController::class, 'todo']);
    Route::get('/doingstatus', [HomepageController::class, 'doing']);
    Route::get('/pendingstatus', [HomepageController::class, 'pending']);
    Route::get('/completestatus', [HomepageController::class, 'completed']);
    Route::get('/username', [HomepageController::class, 'technician']);
});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

