<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function getFinanceOverview(){
        $menu = "Finance";
        $title = "Overview";
        return view('publisher.finance.overview', compact('menu', 'title'));
    }

    public function getPayments(){
        $menu = "Finance";
        $title = "Payments";
        return view('publisher.finance.payments', compact('menu', 'title'));
    }
}
