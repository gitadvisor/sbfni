<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('frontend.home');});

Route::get('/welcom', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('backend.home');
    })->name('home');

 Route::resource('roles', RoleController::class);
 Route::resource('users', UserController::class);
 
 });
 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';