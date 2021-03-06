<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users',UserController::class)->names('users');

Route::get('notas/todas',[NoteController::class,'all']);
Route::get('notas/favoritas',[NoteController::class,'favorites']);
Route::get('notas/archivadas',[NoteController::class,'archived']);
