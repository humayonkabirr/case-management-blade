<?php

use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\backend\DashboardController;
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

Route::group(['middleware' => ['auth:sanctum'],'as' => 'admin.'],  function () {
    // Route::resource('/', SiteController::class);

    Route::resource('/', DashboardController::class);

    Route::resource('/role', RoleController::class );

});


