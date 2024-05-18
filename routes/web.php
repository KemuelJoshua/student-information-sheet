<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentInformationController;
use App\Models\StudentInformation;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('/student-information', StudentInformationController::class)->middleware('can:is-admin');
    Route::resource('/index', StudentController::class)->except('edit', 'destroy', 'create')->middleware('can:is-student');
    Route::get('/export', [ExportController::class, 'ExportStudentInformation'])->name('export.csv');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
