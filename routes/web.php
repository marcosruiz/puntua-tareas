<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\QuestionGroupController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('question-groups', QuestionGroupController::class)
    ->middleware(['auth', 'verified']);

Route::resource('questions', QuestionController::class)
    ->middleware(['auth', 'verified']);

Route::resource('roles', RoleController::class)
    ->middleware(['auth', 'verified']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
