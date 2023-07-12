<?php

use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\UsersController;
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

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});

Route::group(['middleware' => 'can:is-admin'], function () {
    Route::resource('departments', DepartmentsController::class)->only(['index', 'create', 'store']);
    Route::resource('users', UsersController::class);
});


Route::get('my-profile', [ProfilesController::class, 'myProfile'])->name('my-profile.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
