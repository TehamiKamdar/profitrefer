<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getTransactions(){
        $menu = "Report";
        $title = "Transactions";
        return view('publisher.reporting.transaction', compact('menu', 'title'));
    }

    public function getAdvertiserPerformance(){
        $menu = "Report";
        $title = "Advertiser Performance";
        return view('publisher.reporting.performance', compact('menu', 'title'));
    }

    public function getClickPerformance(){
        $menu = "Report";
        $title = "Click Performance";
        return view('publisher.reporting.click_performance', compact('menu', 'title'));
    }
}
