<?php

use App\Http\Controllers\Publisher\AdvertiserController as PublisherAdvertiserController;
use App\Http\Controllers\Publisher\HomeController as PublisherHomeController;
use App\Http\Controllers\Publisher\PromoteController as PublisherPromoteController;
use App\Http\Controllers\Publisher\ReportController as PublisherReportController;
use App\Http\Controllers\Publisher\FinanceController as PublisherFinanceController;
use App\Http\Controllers\Publisher\ToolController as PublisherToolController;
use App\Http\Controllers\Publisher\ProfileController as PublisherProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__ . "\x2f\141\x75\164\150\056\x70\150\160"; //auth.php
require __DIR__ . "\x2f\141\144\x6d\151\156\056\x70\150\160"; //admin.php
require __DIR__ . "\x2f\160\x75\142\154\x69\163\150\x65\162\056\x70\150\160"; //publisher.php


Route::get("/", function () {
    return redirect()->route("get-started");
});