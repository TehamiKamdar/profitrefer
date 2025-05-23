<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoteController extends Controller
{
    public function getCoupons(){
        return view('publisher.promote.coupons');
    }

    public function getTextLinks(){
        return view('publisher.promote.text_links');
    }

    public function getDeepLinks(){
        return view('publisher.promote.deep_links');
    }
}
