<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Backend\CaseTypeController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Backend\UserManageController; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:sanctum'],'as' => 'admin.'],  function () {
    // Dashboard Route
    Route::resource('/', DashboardController::class);

    // Role Route
    Route::resource('/role', RoleController::class );

    // User-Manage
    Route::resource('user', UserManageController::class);

    // Case-Type-Manage
    Route::resource('case-type', CaseTypeController::class);

});




Route::fallback(function () {
    return view('errors.404');
});


