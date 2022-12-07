<?php

use Illuminate\Support\Facades\Route;
use App\Models\student;
use App\Http\Controllers\studentController;

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

Route::get('/test', function () {
    return 'hi';
});

Route::get('studentlist',[studentController::class,'index']);
Route::get('add-student',[studentController::class,'addStudent']);
Route::post('save-student',[studentController::class,'saveStudent']);
Route::get('edit-student/{id}',[studentController::class,'editStudent']);
Route::post('update-student/{id}',[studentController::class,'updatestudent']);
Route::get('delete-student/{id}',[studentController::class,'deleteStudent']);