<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getTransactions(){
        return view('publisher.reporting.transaction');
    }

    public function getAdvertiserPerformance(){
        return view('publisher.reporting.performance');
    }

    public function getClickPerformance(){
        return view('publisher.reporting.click_performance');
    }
}
