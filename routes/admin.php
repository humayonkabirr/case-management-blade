<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Backend\AdvocateController;
use App\Http\Controllers\Backend\CaseInfoController;
use App\Http\Controllers\Backend\CaseTypeController;
use App\Http\Controllers\Backend\CourtController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Backend\EducationInfoController;
use App\Http\Controllers\Backend\JudgeController;
use App\Http\Controllers\Backend\OrganizationController;
use App\Http\Controllers\Backend\UserManageController;
use App\Models\EducationInfo;
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

    // Court-Manage
    Route::resource('court', CourtController::class);

    // Organization-Manage
    Route::resource('organization', OrganizationController::class);

    // Advocate-Manage
    Route::resource('advocate', AdvocateController::class);
    
    // Judge-Manage
    Route::resource('judge', JudgeController::class);
    
    // Education-info-Manage
    Route::resource('education-info', EducationInfoController::class);
    
    // case-Manage
    Route::resource('case', CaseInfoController::class);

});




Route::fallback(function () {
    return view('errors.404');
});


