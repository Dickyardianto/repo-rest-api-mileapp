<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PackageController;

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

Route::get('/package', [PackageController::class, 'getPackage']);
Route::get('/package/{id}', [PackageController::class, 'getPackageId']);
Route::post('/package', [PackageController::class, 'postPackage']);
Route::put('/package/{id}', [PackageController::class, 'putPackage']);
Route::patch('/package/{id}', [PackageController::class, 'pathPackage']);
Route::delete('/package/{id}', [PackageController::class, 'deletePackage']);
