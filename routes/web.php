<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/' ,function(){
//     return view('welcome');
// });

Route::get('/', [TaskController::class, 'index']);

Route::get('/tasks', [TaskController::class, 'index']);

Route::get('/create', [TaskController::class, 'create']);

Route::post('/tasks', [TaskController::class, 'store']);

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
