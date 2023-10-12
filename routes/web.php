<?php

use App\Http\Controllers\StudentController;
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
    return view('login');
});
Route::post('login', [StudentController::class, 'login']);


Route::get('list_student', [StudentController::class, 'index'])->name('list');
Route::get('add_student', [StudentController::class, 'create']);
Route::post('add_student', [StudentController::class, 'store']);

Route::get('delete/{id}', [StudentController::class, 'destroy']);

Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::post('update/{id}', [StudentController::class, 'update']);


Route::get('get_student', [StudentController::class, 'get_student'])->name("getdata");

Route::get('add_subject', [StudentController::class, 'add_subject']);
Route::post('add_subject', [StudentController::class, 'store_subject']);


Route::get('pdf_generate/{id}', [StudentController::class, 'pdf_generate'])->name("pdf_gen");

Route::get('excel_generate/{id}', [StudentController::class, 'excel_generate']);
