<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;

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

Route::get('/', [DashboardController::class, 'getData']);

Route::controller(StudentController::class)->group(function(){
    Route::get('/students', 'get');
    Route::get('/students/add', 'add');
    Route::get('/students/{id}/edit', 'edit')->name('students.edit');
    
    Route::post('/students/create', 'create')->name('students.create');
    Route::put('/students/{id}/update', 'update')->name('students.update');
    Route::delete('/students/{id}/delete', 'delete')->name('students.delete');
});

Route::controller(GradeController::class)->group(function(){
    Route::get('/students/{id}/grades/add', 'add');
    Route::get('/students/{id}/grades/edit', 'edit');

    Route::post('/grades/{id}/create', 'create')->name('grades.create');
    Route::put('/grades/{id}/update', 'update')->name('grades.update');
});