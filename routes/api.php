<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Agregado para el controlador de perfiles
use App\Http\Controllers\UserController; // Agregado para el controlador de usuarios

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('profile', ProfileController::class);

Route::get('users', [UserController::class, 'index']);

