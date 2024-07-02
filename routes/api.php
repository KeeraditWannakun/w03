<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccineRecordController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('faculties', FacultyController::class);
Route::apiResource('programs', ProgramController::class);
Route::apiResource('students', StudentController::class);
Route::apiResource('vaccines', VaccineController::class);
Route::apiResource('vaccine-records', VaccineRecordController::class);

