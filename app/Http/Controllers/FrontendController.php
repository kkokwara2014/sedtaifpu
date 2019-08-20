<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $title='Home';
        return view('frontend.index', compact('title'));
    }

    public function about()
    {
        $title='About Us';
        return view('frontend.about.aboutus', compact('title'));
    }
    public function contact()
    {
        $title='Contact Us';
        return view('frontend.about.aboutus', compact('title'));
    }
    public function faq()
    {
        $title='FAQ';
        return view('frontend.faq.faq', compact('title'));
    }
}
