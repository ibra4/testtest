<?php

use App\Http\Controllers\AbasReportsController;
use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\ExamineesController;
use App\Http\Controllers\Api\LeiterRecordsController;
use App\Http\Controllers\Api\LeiterExamsController;
use App\Http\Controllers\Api\SubAdminsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LeiterReportsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin/logout', [LoginController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('{langcode}/admin/{any?}', function ($langcode) {
        return view('dashboard', ['langcode' => $langcode]);
    })->where('any', '.*')->name('dashboard');

    Route::get('/admins/export', [AdminsController::class, 'export']);
    Route::get('/sub-admins/export', [SubAdminsController::class, 'export']);
    Route::get('/examinees/export', [ExamineesController::class, 'export']);
    Route::get('/leiter-records/{type}/export', [LeiterRecordsController::class, 'export']);
    Route::get('/leiter-reports/export', [LeiterExamsController::class, 'actionExport']);
});

Auth::routes();

Route::get('/', function () {
    return redirect()->route('dashboard', ['langcode' => 'ar']);
});

Route::middleware('can:root')->group(function () {
    Route::get('debug/logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
});

Route::impersonate();

Route::group(['middleware' => ['auth', 'report_owner']], function () {
    Route::get('{lang}/leiter-report/{id}/first', [LeiterReportsController::class, 'index'])->name('leiter_report.first');
    Route::get('{lang}/leiter-report/{id}/second', [LeiterReportsController::class, 'charts'])->name('leiter_report.second');
});

Route::group(['middleware' => ['auth', 'report_owner']], function () {
    // Tables report
    Route::get('{lang}/abas-report/{id}', [AbasReportsController::class, 'actionIndex'])->name('abas_report.main');
    // Charts report
    Route::get('{lang}/abas-report-v2/{id}', [AbasReportsController::class, 'actionIndexV2'])->name('abas_report.main2');
    // Goals report
    Route::get('{lang}/abas-report-v3/{id}', [AbasReportsController::class, 'actionIndexV3'])->name('abas_report.main3');
    // Goals description report
    Route::get('{lang}/abas-report-v4/{id}', [AbasReportsController::class, 'actionIndexV4'])->name('abas_report.main4');
});
