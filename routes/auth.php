<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/get-started', function(){
    return redirect()->route('login');
})->name('get-started');


Route::get('/login', [LoginController::class, 'loginView'])->name('login');

route::get('/register', [RegisterController::class, 'registerView'])->name('register');