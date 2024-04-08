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

Route::delete('/tasks/{id}', [TaskController::class, 'delete']);

Route::patch('/tasks/{id}', [TaskController::class, 'update']);

Route::get('/view/{id}', [TaskController::class,'viewDetails']);

Route::get('edit/{id}', [TaskController::class, 'edit']);

Route::get('/edit', [TaskController::class, 'updateTask']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
