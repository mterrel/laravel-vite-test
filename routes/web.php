<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'actionLogin'])->name('actionLogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('logout', [UserController::class, 'actionLogout'])->name('logout')->middleware('auth');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'store']);
