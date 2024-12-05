<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::get('logout',[\App\Http\Controllers\AuthController::class, 'logout']);
Route::middleware('auth.middleware')->group(function () {
    Route::resource('articles', ArticleController::class);
});
