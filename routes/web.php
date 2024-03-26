<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks.index');
});
Route::get('create', function(){
    return view('tasks.create');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
