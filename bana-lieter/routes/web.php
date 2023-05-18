<?php

use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\ExamineesController;
use App\Http\Controllers\Api\LeiterRecordsController;
use App\Http\Controllers\Api\SubAdminsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReportsController;
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
});

Auth::routes();

Route::get('/', function () {
    $stop = "";
    return redirect()->route('dashboard', ['langcode' => 'ar']);
});

Route::get('debug/logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index'])->middleware('can:root');

Route::get('report/{id}/first', [ReportsController::class, 'index'])->name('reports.first');
Route::get('report/{id}/second', [ReportsController::class, 'charts'])->name('reports.second');
