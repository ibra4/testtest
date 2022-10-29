<?php

use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\ExamineesController;
use App\Http\Controllers\Api\SubAdminsController;
use App\Http\Controllers\Auth\LoginController;
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
    Route::get('/admin/{any?}', function () {
        return view('dashboard');
    })->where('any', '.*')->name('dashboard');

    Route::get('/admins/export', [AdminsController::class, 'export']);
    Route::get('/sub-admins/export', [SubAdminsController::class, 'export']);
    Route::get('/examinees/export', [ExamineesController::class, 'export']);
});

Auth::routes();

Route::get('/', function () {
    return redirect()->route('dashboard');
});
