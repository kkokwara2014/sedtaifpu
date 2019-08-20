<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    public function abstracttemplate(){
        $title='Download Abstract Template';
        return view('frontend.download.abstract',compact('title'));
    }
    public function fullpapertemplate(){
        $title='Download Full Paper Template';
        return view('frontend.download.fullpaper',compact('title'));
    }
}
