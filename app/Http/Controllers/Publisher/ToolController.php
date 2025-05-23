<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function getLinkGenerator(){
        return view('publisher.tools.link-generator');
    }
    public function getApi(){
        return view('publisher.tools.api');
    }
    public function getExportFiles(){
        return view('publisher.tools.download-export-files');
    }
}
