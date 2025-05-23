<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getInformation(){
        $menu = "Settings";
        $title = "Profile";
        return view('publisher.profile.index', compact('menu', 'title'));
    }
}
