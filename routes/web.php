<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Idea\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::resource('idea', IdeaController::class)->middleware('auth');

Route::resource('ideas.comments', CommentController::class)->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

