<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromoteController extends Controller
{
    public function getCoupons(){
        $menu = "Promotions";
        $title = "Coupons";
        return view('publisher.promote.coupons', compact('menu', 'title'));
    }

    public function getTextLinks(){
        $menu = "Promotions";
        $title = "Text Links";
        return view('publisher.promote.text_links', compact('menu', 'title'));
    }

    public function getDeepLinks(){
        $menu = "Promotions";
        $title = "Deep Links";
        return view('publisher.promote.deep_links', compact('menu', 'title'));
    }
}
