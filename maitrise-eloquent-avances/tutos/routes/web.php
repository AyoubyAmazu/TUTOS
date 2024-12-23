<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware('role:admin');

Route::get('/editor', function () {
    return 'Editor Dashboard';
})->middleware('role:editor');


Route::get('/update',[ArticleController::class,'update']);

Route::middleware(['permission:view dashboard'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');  
      });
});