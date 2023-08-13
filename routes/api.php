<?php

use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\BootstrapController;
use App\Http\Controllers\Api\AdminMediaController;
use App\Http\Controllers\Api\CountryStatisticController;
use App\Http\Controllers\Api\SubAdminsController;
use App\Http\Controllers\Api\ExamineesController;
use App\Http\Controllers\Api\InfoController;
use App\Http\Controllers\Api\LeiterExamsController;
use App\Http\Controllers\Api\LeiterRecordsController;
use App\Http\Controllers\Api\LeiterReportsController;
use App\Http\Controllers\Api\MyProfileController;
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
        Route::post('/admins/{id}/delete', [AdminsController::class, 'actionDelete']);

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
    });

    Route::middleware('can:admin_or_sub_admin')->group(function () {
        // Statistics
        Route::get('/country-statistics/{id}', [CountryStatisticController::class, 'index']);
        // History
        Route::get('/history', [InfoController::class, 'historyIndex']);
        Route::get('/history/teaser', [InfoController::class, 'historyTeaser']);
        Route::get('/top-5', [InfoController::class, 'top5Index']);
        Route::get('/top-5/teaser', [InfoController::class, 'top5Teaser']);
    });

    Route::middleware('can:admin')->group(function () {
        // Examiners
        Route::get('/sub-admins', [SubAdminsController::class, 'index']);
        Route::get('/sub-admins/{id}', [SubAdminsController::class, 'get']);
        Route::post('/sub-admins/create', [SubAdminsController::class, 'create']);
        Route::put('/sub-admins/{id}/update', [SubAdminsController::class, 'update']);
        Route::post('/sub-admins/{id}/delete', [AdminsController::class, 'actionDelete']);

        // Uploads
        Route::post('/admins/upload', [AdminMediaController::class, 'adminsUpload']);
    });

    Route::middleware('can:show_examinees')->group(function () {
        // Examinees
        Route::get('/examinees', [ExamineesController::class, 'index']);
        Route::get('/examinees/{id}', [ExamineesController::class, 'get']);
        /** @deprecated*/
        Route::get('/examinees-exam/{id}', [ExamineesController::class, 'getExam']);
        /** @deprecated*/
        Route::put('/examinees-exam/{id}/{type}', [ExamineesController::class, 'saveExam']);
        Route::post('/examinees/create', [ExamineesController::class, 'create']);
        Route::put('/examinees/{id}/update', [ExamineesController::class, 'update']);

        // New
        Route::get('/examinees/{id}/exams', [ExamineesController::class, 'actionExams'])->name('examinee.exams');

        // Leiter
        Route::get('/examinees/leiter/{id}', [LeiterExamsController::class, 'actionGet'])->name('examinee.leiter-exams');
        Route::put('/examinees/leiter/update/{id}/{type}', [LeiterExamsController::class, 'actionUpdate']);
        Route::post('/examinees/leiter/create/{id}', [LeiterExamsController::class, 'actionCreate']);

        // Reports
        Route::get('/reports/leiter', [LeiterReportsController::class, 'actionIndex'])->name('reports.leiter');
        Route::post('/reports/leiter/{id}/delete', [LeiterReportsController::class, 'actionDelete']);
    });

    Route::get('/my-profile/data', [MyProfileController::class, 'index']);
    Route::post('/my-profile/update', [MyProfileController::class, 'update']);
});

// Sliders
Route::get('/sliders', [SlidersController::class, 'index']);
