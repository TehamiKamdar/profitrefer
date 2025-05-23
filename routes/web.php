<?php

use App\Http\Controllers\Publisher\AdvertiserController as PublisherAdvertiserController;
use App\Http\Controllers\Publisher\HomeController as PublisherHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return redirect()->route("publisher.dashboard");
});

Route::group(["prefix"=> "publisher", "as" => "publisher."], function () {
    // Publisher Index Page
    Route::get('dashboard', [PublisherHomeController::class,'index'])->name('dashboard');


    //Publisher -> Advertisers Page
    Route::get('my_advertisers', [PublisherAdvertiserController::class,'getMyAdvertisers'])->name('my-advertisers');
    Route::get('new_advertisers', [PublisherHomeController::class,'getNewAdvertisers'])->name('new-advertisers');
    Route::get('find_advertisers', [PublisherAdvertiserController::class,'getFindAvertisers'])->name('find-advertisers');
    Route::get('view_advertisers/{advertiser?}', [PublisherAdvertiserController::class,'viewAdvertisers'])->name('view-advertisers');
});
