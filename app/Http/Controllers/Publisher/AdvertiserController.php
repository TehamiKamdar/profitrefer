<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
  public function getMyAdvertisers()
  {
    return view("publisher.advertisers.my");
  }

  public function getNewAdvertisers()
  {
    return view("publisher.advertisers.new");
  }

  public function getFindAvertisers()
  {
    return view("publisher.advertisers.find");
  }

  public function viewAdvertisers()
  {
    return view("publisher.advertisers.view");
  }
}
