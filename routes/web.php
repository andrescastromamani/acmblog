<?php

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

Route::get('/', function () {
    return view('welcome')  ;
})->name('welcome');

Route::get('contact', function (){
   return view('contact') ;
})->name('contact');

Route::get('services', function (){
    return view('services') ;
})->name('services');

Route::get('aboutus', function (){
    $team = ['Fidel','Jose','Ariel', 'Rimer'];
    //return view('aboutus',['team'=>$team]);
    return view('aboutus',compact('team'));
})->name('aboutus');

Route::get('admin', function (){
    return view('admin') ;
})->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
