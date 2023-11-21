<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [AuthController::class,'show'])->name('login');
Route::post('/', [AuthController::class,'login']);
Route::get('main', [TaskController::class, 'index'])->name('main');
Route::get('add.task', [TaskController::class, 'create'])->name('add.task');
Route::post('add.task', [TaskController::class, 'store'])->name('add.task');
Route::get('edit/{id}' ,[TaskController::class, 'edit'])->name('edit.task');
Route::get('delete/{id}' ,[TaskController::class, 'destroy'])->name('delete.task');
Route::patch('edit/{id}' ,[TaskController::class, 'update'])->name('update.task');
Route::delete('logout' , [AuthController::class,'logout'])->name('logout');
Route::get('error' , function (){
    return view('error');
})->name('error');
