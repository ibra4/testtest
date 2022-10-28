<?php

use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\BootstrapController;
use App\Http\Controllers\Api\AdminMediaController;
use App\Http\Controllers\Api\CountryStatisticController;
use App\Http\Controllers\Api\SubAdminsController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/bootstrap', [BootstrapController::class, 'getConfig']);
    Route::middleware('can:root')->group(function () {
        Route::get('/admins', [AdminsController::class, 'index']);
        Route::get('/admins/{id}', [AdminsController::class, 'get']);
        Route::post('/admins/create', [AdminsController::class, 'create']);
        Route::put('/admins/{id}/update', [AdminsController::class, 'update']);

        Route::get('/country-statistics/{id}', [CountryStatisticController::class, 'index']);
    });

    Route::middleware('can:admin')->group(function () {
        Route::get('/sub-admins', [SubAdminsController::class, 'index']);
        Route::get('/sub-admins/{id}', [SubAdminsController::class, 'get']);
        Route::post('/sub-admins/create', [SubAdminsController::class, 'create']);
        Route::put('/sub-admins/{id}/update', [SubAdminsController::class, 'update']);
        Route::put('/admins/{id}/activate', [AdminsController::class, 'activate']);

        Route::post('/admins/upload', [AdminMediaController::class, 'adminsUpload']);
    });
});
