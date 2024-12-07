<?php

use App\Http\Controllers\Api\AddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Address-Manage
Route::group(['prefix'=>'address','as' => 'api.'],  function () {
    Route::get('divisions', [AddressController::class, 'divisions'])->name('divisions');
    Route::get('districts/{id?}', [AddressController::class, 'districts'])->name('districts');
    Route::get('upazilas/{id?}', [AddressController::class, 'upazilas'])->name('upazilas');
    Route::get('unions/{id?}', [AddressController::class, 'unions'])->name('unions');
});
