<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/experience', [PageController::class, 'experience'])->name('experience');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
