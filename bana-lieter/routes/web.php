<?php

use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\SubAdminsController;
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


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/admin/{any?}', function () {
        return view('welcome');
    })->where('any', '.*');;

    Route::get('/admins/export', [AdminsController::class, 'export'])->name('home');
    Route::get('/sub-admins/export', [SubAdminsController::class, 'export'])->name('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
