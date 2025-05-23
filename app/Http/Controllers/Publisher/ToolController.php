<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function getLinkGenerator(){
        $menu = "Tools";
        $title = "Link Generator";
        return view('publisher.tools.link_generator', compact('menu', 'title'));
    }
    public function getApi(){
        $menu = "Tools";
        $title = "Api";
        return view('publisher.tools.api', compact('menu', 'title'));
    }
    public function getExportFiles(){
        $menu = "Tools";
        $title = "Export Files";
        return view('publisher.tools.download_export_files', compact('menu', 'title'));
    }
}
