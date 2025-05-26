<?php

use App\Http\Controllers\Admin\AdvertisersController as AdminAdvertisersController;
use App\Http\Controllers\Admin\HomeController as  AdminHomeController;
use App\Http\Controllers\Admin\PublishersController as AdminPublishersController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\Admin\UsersController as AdminUsersController;
use App\Http\Controllers\Admin\SettingsController as AdminSettingsController;


use Illuminate\Support\Facades\Route;
Route::group(["prefix"=>"admin", "as"=>"admin."], function(){

    // Admin Index Page
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');


    // Publishers Routes -> Admin
    Route::group(["prefix"=>"publishers", "as"=>"publisher."], function(){
        Route::get('/{status?}', [AdminPublishersController::class, ''])->name('status');
    });


    // Advertisers Routes -> Admin
    Route::group(["prefix"=>"advertisers", "as"=>"advertiser."], function(){
        Route::get('/api', [AdminAdvertisersController::class, ''])->name('api');
    });


    // Transaction Routes -> Admin
    Route::group(["prefix"=>"transactions", "as"=>"transaction."], function(){
        Route::get('/', [AdminTransactionController::class, ''])->name('index');
    });


    // Users Routes -> Admin
    Route::group(["prefix"=>"users", "as"=>"user."], function(){
        Route::get('/', [AdminUsersController::class, ''])->name('index');
    });


    // Settings Routes -> Admin
    Route::group(["prefix"=>"settings", "as"=>"settings."], function(){
        Route::get('/', [AdminSettingsController::class, ''])->name('index');
    });

});