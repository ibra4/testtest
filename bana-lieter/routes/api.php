<?php

use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\BootstrapController;
use App\Http\Controllers\Api\AdminMediaController;
use App\Http\Controllers\Api\CountryStatisticController;
use App\Http\Controllers\Api\SubAdminsController;
use App\Http\Controllers\Api\ExamineesController;
use App\Http\Controllers\Api\LeiterRecordsController;
use App\Http\Controllers\Api\SlidersController;
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
        // Admins
        Route::get('/admins', [AdminsController::class, 'index']);
        Route::get('/admins/{id}', [AdminsController::class, 'get']);
        Route::post('/admins/create', [AdminsController::class, 'create']);
        Route::put('/admins/{id}/update', [AdminsController::class, 'update']);

        // Leiter Records
        Route::get('/leiter-records/{id}', [LeiterRecordsController::class, 'get']);
        Route::get('/leiter-records/type/{type}', [LeiterRecordsController::class, 'getByType']);
        Route::post('/leiter-records/create', [LeiterRecordsController::class, 'create']);
        Route::put('/leiter-records/{id}/update', [LeiterRecordsController::class, 'update']);
        Route::post('/leiter-records/{id}/delete', [LeiterRecordsController::class, 'delete']);

        // Sliders
        Route::get('/sliders', [SlidersController::class, 'index']);
        Route::get('/sliders/{id}', [SlidersController::class, 'get']);
        Route::post('/sliders/create', [SlidersController::class, 'create']);
        Route::put('/sliders/{id}/update', [SlidersController::class, 'update']);
        Route::post('/sliders/upload', [SlidersController::class, 'upload']);

        // Statistics
        Route::get('/country-statistics/{id}', [CountryStatisticController::class, 'index']);
    });

    Route::middleware('can:admin')->group(function () {
        // Examiners
        Route::get('/sub-admins', [SubAdminsController::class, 'index']);
        Route::get('/sub-admins/{id}', [SubAdminsController::class, 'get']);
        Route::post('/sub-admins/create', [SubAdminsController::class, 'create']);
        Route::put('/sub-admins/{id}/update', [SubAdminsController::class, 'update']);

        // Uploads
        Route::post('/admins/upload', [AdminMediaController::class, 'adminsUpload']);
    });

    Route::middleware('can:show_examinees')->group(function () {
        // Examinees
        Route::get('/examinees', [ExamineesController::class, 'index']);
        Route::get('/examinees/{id}', [ExamineesController::class, 'get']);
        Route::get('/examinees-exam/{id}', [ExamineesController::class, 'getExam']);
        Route::put('/examinees-exam/{id}/{type}', [ExamineesController::class, 'saveExam']);
        Route::post('/examinees/create', [ExamineesController::class, 'create']);
        Route::put('/examinees/{id}/update', [ExamineesController::class, 'update']);
    });
});

// Sliders
Route::get('/sliders', [SlidersController::class, 'index']);
