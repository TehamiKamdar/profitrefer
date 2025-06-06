<?php

use App\Http\Controllers\Publisher\AdvertiserController as PublisherAdvertiserController;
use App\Http\Controllers\Publisher\HomeController as PublisherHomeController;
use App\Http\Controllers\Publisher\PromoteController as PublisherPromoteController;
use App\Http\Controllers\Publisher\ReportController as PublisherReportController;
use App\Http\Controllers\Publisher\FinanceController as PublisherFinanceController;
use App\Http\Controllers\Publisher\ToolController as PublisherToolController;
use App\Http\Controllers\Publisher\ProfileController as PublisherProfileController;
use Illuminate\Support\Facades\Route;


Route::group(["prefix"=> "publisher", "as" => "publisher."], function () {
    // Publisher Index Page
    Route::get('dashboard', [PublisherHomeController::class,'index'])->name('dashboard');


    //Publisher -> Advertisers Pages
    Route::get('my_advertisers', [PublisherAdvertiserController::class,'getMyAdvertisers'])->name('advertiser.my-advertisers');
    Route::get('new_advertisers', [PublisherAdvertiserController::class,'getNewAdvertisers'])->name('advertiser.new-advertisers');
    Route::get('find_advertisers', [PublisherAdvertiserController::class,'getFindAvertisers'])->name('advertiser.find-advertisers');
    Route::get('view_advertisers/{advertiser?}', [PublisherAdvertiserController::class,'viewAdvertisers'])->name('advertiser.view-advertisers');


    //Publisher -> Reporting Pages
    Route::get('transactions', [PublisherReportController::class, 'getTransactions'])->name('report.transactions');
    Route::get('performance', [PublisherReportController::class, 'getAdvertiserPerformance'])->name('report.advertiser-performance');
    Route::get('click-performance', [PublisherReportController::class, 'getClickPerformance'])->name('report.click-performance');


    //Publisher -> Promote Pages
    Route::get('coupons', [PublisherPromoteController::class, 'getCoupons'])->name('promote.coupons');
    Route::get('text-links', [PublisherPromoteController::class, 'getTextLinks'])->name('promote.text-links');
    Route::get('deep-links', [PublisherPromoteController::class, 'getDeepLinks'])->name('promote.deep-links');


    //Publisher -> Finance Pages
    Route::get('finance-overview', [PublisherFinanceController::class, 'getFinanceOverview'])->name('finance.finance-overview');
    Route::get('payments', [PublisherFinanceController::class, 'getPayments'])->name('finance.payments');


    // Publisher -> Tools Pages
    Route::get('link-generator', [PublisherToolController::class, 'getLinkGenerator'])->name('tools.link-generator');
    Route::get('api', [PublisherToolController::class, 'getApi'])->name('tools.api');
    Route::get('download-export-files', [PublisherToolController::class, 'getExportFiles'])->name('tools.download-export-files');


    // Publisher -> Profile Page
    Route::get('profile', [PublisherProfileController::class, 'getInformation'])->name('profile.user-profile');
});
