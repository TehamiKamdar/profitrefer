<?php

use App\Http\Controllers\Publisher\AdvertiserController as PublisherAdvertiserController;
use App\Http\Controllers\Publisher\HomeController as PublisherHomeController;
use App\Http\Controllers\Publisher\PromoteController as PublisherPromoteController;
use App\Http\Controllers\Publisher\ReportController as PublisherReportController;
use App\Http\Controllers\Publisher\FinanceController as PublisherFinanceController;
use App\Http\Controllers\Publisher\ToolController as PublisherToolController;
use App\Http\Controllers\Publisher\ProfileController as PublisherProfileController;
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


    //Publisher -> Advertisers Pages
    Route::get('my_advertisers', [PublisherAdvertiserController::class,'getMyAdvertisers'])->name('my-advertisers');
    Route::get('new_advertisers', [PublisherAdvertiserController::class,'getNewAdvertisers'])->name('new-advertisers');
    Route::get('find_advertisers', [PublisherAdvertiserController::class,'getFindAvertisers'])->name('find-advertisers');
    Route::get('view_advertisers/{advertiser?}', [PublisherAdvertiserController::class,'viewAdvertisers'])->name('view-advertisers');


    //Publisher -> Reporting Pages
    Route::get('transactions', [PublisherReportController::class, 'getTransactions'])->name('transactions');
    Route::get('performance', [PublisherReportController::class, 'getAdvertiserPerformance'])->name('advertiser-performance');
    Route::get('click-performance', [PublisherReportController::class, 'getClickPerformance'])->name('click-performance');


    //Publisher -> Promote Pages
    Route::get('coupons', [PublisherPromoteController::class, 'getCoupons'])->name('coupons');
    Route::get('text-links', [PublisherPromoteController::class, 'getTextLinks'])->name('text-links');
    Route::get('deep-links', [PublisherPromoteController::class, 'getDeepLinks'])->name('deep-links');


    //Publisher -> Finance Pages
    Route::get('finance-overview', [PublisherFinanceController::class, 'getFinanceOverview'])->name('finance-overview');
    Route::get('payments', [PublisherFinanceController::class, 'getPayments'])->name('payments');


    // Publisher -> Tools Pages
    Route::get('link-generator', [PublisherToolController::class, 'getLinkGenerator'])->name('link-generator');
    Route::get('api', [PublisherToolController::class, 'getApi'])->name('api');
    Route::get('download-export-files', [PublisherToolController::class, 'getExportFiles'])->name('download-export-files');


    // Publisher -> Profile Page
    Route::get('profile', [PublisherProfileController::class, 'getInformation'])->name('user-profile');
});
