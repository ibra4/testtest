<?php

use App\Http\Controllers\Api\AbasDomainsController;
use App\Http\Controllers\Api\AbasExamsController;
use App\Http\Controllers\Api\AbasQuestionsController;
use App\Http\Controllers\Api\AbasSubDomainsController;
use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\BootstrapController;
use App\Http\Controllers\Api\AdminMediaController;
use App\Http\Controllers\Api\CasdExamsController;
use App\Http\Controllers\Api\CasdQuestionsController;
use App\Http\Controllers\Api\CasdSubDomainsController;
use App\Http\Controllers\Api\CountryStatisticController;
use App\Http\Controllers\Api\SubAdminsController;
use App\Http\Controllers\Api\ExamineesController;
use App\Http\Controllers\Api\InfoController;
use App\Http\Controllers\Api\LeiterExamsController;
use App\Http\Controllers\Api\LeiterRecordsController;
use App\Http\Controllers\Api\MyProfileController;
use App\Http\Controllers\Api\NotificationsController;
use App\Http\Controllers\Api\SettingsController;
use App\Http\Controllers\Api\SlidersController;
use App\Http\Controllers\Api\TinyCMEController;
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

        // Notifications
        Route::get('/notifications', [NotificationsController::class, 'actionIndex']);
        Route::get('/notifications/{id}', [NotificationsController::class, 'actionGet']);
        Route::post('/notifications/create', [NotificationsController::class, 'actionCreate']);
        Route::put('/notifications/{id}/update', [NotificationsController::class, 'actionUpdate']);
        Route::post('/notifications/{id}/delete', [NotificationsController::class, 'actionDelete']);

        // Abas Domains
        Route::get('/abas/domains', [AbasDomainsController::class, 'actionIndex']);
        Route::get('/abas/domains/{id}', [AbasDomainsController::class, 'actionGet']);
        Route::post('/abas/domains/create', [AbasDomainsController::class, 'actionCreate']);
        Route::put('/abas/domains/{id}/update', [AbasDomainsController::class, 'actionUpdate']);

        // Abas Sub Domains
        Route::get('/abas/sub-domains', [AbasSubDomainsController::class, 'actionIndex']);
        Route::get('/abas/sub-domains/{id}', [AbasSubDomainsController::class, 'actionGet']);
        Route::post('/abas/sub-domains/create', [AbasSubDomainsController::class, 'actionCreate']);
        Route::put('/abas/sub-domains/{id}/update', [AbasSubDomainsController::class, 'actionUpdate']);

        // Abas Questions
        Route::get('/abas/questions', [AbasQuestionsController::class, 'actionIndex']);
        Route::get('/abas/questions/{id}', [AbasQuestionsController::class, 'actionGet']);
        Route::post('/abas/questions/create', [AbasQuestionsController::class, 'actionCreate']);
        Route::put('/abas/questions/{id}/update', [AbasQuestionsController::class, 'actionUpdate']);

        // CASD Sub Domains
        Route::get('/casd/sub-domains', [CasdSubDomainsController::class, 'actionIndex']);
        Route::get('/casd/sub-domains/{id}', [CasdSubDomainsController::class, 'actionGet']);
        Route::post('/casd/sub-domains/create', [CasdSubDomainsController::class, 'actionCreate']);
        Route::put('/casd/sub-domains/{id}/update', [CasdSubDomainsController::class, 'actionUpdate']);

        // CASD Questions
        Route::get('/casd/questions', [CasdQuestionsController::class, 'actionIndex']);
        Route::get('/casd/questions/{id}', [CasdQuestionsController::class, 'actionGet']);
        Route::post('/casd/questions/create', [CasdQuestionsController::class, 'actionCreate']);
        Route::put('/casd/questions/{id}/update', [CasdQuestionsController::class, 'actionUpdate']);

        // Upload to tinyCME
        Route::post('/tinycme/upload', [TinyCMEController::class, 'actionUpload']);

        // Update Setting
        Route::get('/settings', [SettingsController::class, 'actionIndex']);
        Route::put('/settings/update', [SettingsController::class, 'actionUpdate']);
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
        Route::post('/examinees/create', [ExamineesController::class, 'create']);
        Route::put('/examinees/{id}/update', [ExamineesController::class, 'update']);

        // New
        Route::get('/examinees/{id}/exams', [ExamineesController::class, 'actionExams']);

        // Leiter Exams
        Route::get('/leiter-exams', [LeiterExamsController::class, 'actionIndex']);
        Route::get('/leiter-exams/{id}', [LeiterExamsController::class, 'actionGet']);
        Route::put('/leiter-exams/update/{id}/{type}', [LeiterExamsController::class, 'actionUpdate']);
        Route::post('/leiter-exams/create/{id}', [LeiterExamsController::class, 'actionCreate']);
        Route::post('/leiter-exams/{id}/delete', [LeiterExamsController::class, 'actionDelete']);

        // Abas Exams
        Route::get('/abas-exams', [AbasExamsController::class, 'actionIndex']);
        Route::get('/abas-exams/{id}', [AbasExamsController::class, 'actionGet']);
        Route::put('/abas-exams/update/{exam_sub_domain_id}', [AbasExamsController::class, 'actionUpdate']);
        Route::post('/abas-exams/create/{id}', [AbasExamsController::class, 'actionCreate']);
        // @TODO: Check this route
        Route::post('/abas-exams/{id}/delete', [AbasExamsController::class, 'actionDelete']);

        // Casd Exams
        Route::get('/casd-exams', [CasdExamsController::class, 'actionIndex']);
        Route::get('/casd-exams/{id}', [CasdExamsController::class, 'actionGet']);
        Route::put('/casd-exams/update/{id}', [CasdExamsController::class, 'actionUpdate']);
        Route::post('/casd-exams/create/{id}', [CasdExamsController::class, 'actionCreate']);
        // @TODO: Check this route
        Route::post('/casd-exams/{id}/delete', [CasdExamsController::class, 'actionDelete']);
    });

    Route::get('/my-profile/data', [MyProfileController::class, 'index']);
    Route::post('/my-profile/update', [MyProfileController::class, 'update']);
    Route::post('/change-lang', [MyProfileController::class, 'actionChangeLangCode']);
});

// Sliders
Route::get('/sliders', [SlidersController::class, 'index']);
