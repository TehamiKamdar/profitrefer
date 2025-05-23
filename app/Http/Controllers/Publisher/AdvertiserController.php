<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    public function getMyAdvertisers()
    {
        $menu = "Advertiser";
        $title = "My Advertisers";
        return view("publisher.advertisers.my", compact('menu', 'title'));
    }

    public function getNewAdvertisers()
    {
        $menu = "Advertiser";
        $title = "New Advertisers";
        return view("publisher.advertisers.new", compact('menu', 'title'));
    }

    public function getFindAvertisers()
    {
        $menu = "Advertiser";
        $title = "Find Advertisers";
        return view("publisher.advertisers.find", compact('menu', 'title'));
    }

    public function viewAdvertisers()
    {
        $menu = "Advertiser";
        $title = "My Advertiser";
        return view("publisher.advertisers.view", compact('menu', 'title'));
    }
}
