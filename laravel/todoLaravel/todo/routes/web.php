<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class , 'show'])->name('show');
Route::post('/', [TaskController::class , 'makeTask'])->name('create');
Route::get('/Task/{id}', [TaskController::class , 'individualTask'])->name('individualTask');
Route::delete('/Task/{id}', [TaskController::class , 'delete'])->name('delete');
Route::put('/Task/{id}/edit', [TaskController::class , 'updateTask'])->name('updateTask');
Route::get('/Task/{id}/edit', [TaskController::class , 'editTask'])->name('editTask');



