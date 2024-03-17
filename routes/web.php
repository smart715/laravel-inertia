<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

Route::get('/', [HomeController::class, 'index']);
Route::apiResource('todos', TodoController::class)->except(['index', 'show']);
