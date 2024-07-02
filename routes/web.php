<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccineRecordController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('faculties', FacultyController::class);
Route::resource('programs', ProgramController::class);
Route::resource('students', StudentController::class);
Route::resource('vaccines', VaccineController::class);
Route::resource('vaccine-records', VaccineRecordController::class);
