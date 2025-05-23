<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function getFinanceOverview(){
        return view('publisher.finance.overview');
    }

    public function getPayments(){
        return view('publisher.finance.payments');
    }
}
