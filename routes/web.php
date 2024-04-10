<?php

use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Idea\IdeaController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::resource('ideas', IdeaController::class)->middleware('auth')->except(['index', 'create']);

Route::resource('ideas.comments', CommentController::class)->middleware('auth');

Route::resource('users', UserController::class)->middleware('auth')->only(['show', 'edit', 'update'])->middleware('auth');




