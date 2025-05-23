<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $menu = "Dashboard";
    $title ="Dashboard";
    return view("publisher.index", compact('menu', 'title'));
  }
}
