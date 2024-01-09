<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function (){
    return view('layouts/app');
});

//admin
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/adminlayout',[ \App\Http\Controllers\AdminController::class,'index'])->name('adminlayout');
    Route::resource('/adminc',\App\Http\Controllers\LibraryController::class);
    Route::get('/admine/{id}',[\App\Http\Controllers\LibraryController::class,'edit']);
    Route::Patch('/admine/{id}',[\App\Http\Controllers\LibraryController::class,'update']);
    Route::Delete('/adminlayout/{id}',[\App\Http\Controllers\LibraryController::class,'destroy']);
    Route::resource('/loan',\App\Http\Controllers\LoanController::class);
    Route::Patch('/loan/loanindex/{id}', [\App\Http\Controllers\LoanController::class, 'update']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



