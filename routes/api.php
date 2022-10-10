<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AssignJobController;
use App\Http\Controllers\CompleteController;
use App\Http\Controllers\IncompleteController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\UnassignedController;

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
Route::get('/UnassignedJob', [UnassignedController::class, 'UnassignedJob']);
Route::get('/pendingstatus', [HomepageController::class, 'pending']);

// Homepage routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/todosatus', [HomepageController::class, 'todo']);
    Route::get('/doingstatus', [HomepageController::class, 'doing']);
    // Route::get('/pendingstatus', [HomepageController::class, 'pending']);
    Route::get('/completestatus', [HomepageController::class, 'completed']);

    Route::get('/todoassignedjob', [AssignJobController::class, 'todo']);
    Route::get('/doingassignedjob', [AssignJobController::class, 'doing']);

    // Route::get('/UnassignedJob', [UnassignedController::class, 'UnassignedJob']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

