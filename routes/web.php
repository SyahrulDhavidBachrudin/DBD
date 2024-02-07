<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/simple-map', [App\Http\Controllers\HomeController::class, 'simple_map'])->name('simple-map');

//Ruote Data
Route::get('/centre-point/data',[\App\Http\Controllers\Backend\DataController::class,'centrepoint'])->name('centre-point.data');
Route::resource('centre-point',(\App\Http\Controllers\Backend\CentrePointController::class));