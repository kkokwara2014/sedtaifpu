<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        $title='Contact Us';
        return view('frontend.contact.contact', compact('title'));
    }
}
