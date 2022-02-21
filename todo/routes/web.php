<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TodoController::class, 'index'])->name('index');
Route::post('/', [TodoController::class, 'store'])->name('store');
Route::delete('/{todo:id}', [TodoController::class, 'destroy'])->name('destroy');