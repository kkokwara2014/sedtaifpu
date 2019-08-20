<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConferenceController extends Controller
{
    public function themes()
    { 
        $title='Conference Themes';
        return view('frontend.conference.theme', compact('title'));
    }
    public function committee()
    { 
        $title='Conference Committee';
        return view('frontend.conference.committee', compact('title'));
    }
    public function keyspeakers()
    { 
        $title='Key Speakers';
        return view('frontend.conference.keyspeaker', compact('title'));
    }

    public function callforpaper()
    { 
        $title='Call for Paper';
        return view('frontend.conference.callforpaper', compact('title'));
    }

    public function location()
    { 
        $title='Conference Location';
        return view('frontend.conference.location', compact('title'));
    }

    public function registration()
    { 
        $title='Conference Registration';
        return view('frontend.conference.registration', compact('title'));
    }

    public function schedule()
    { 
        $title='Conference Schedule';
        return view('frontend.conference.schedule', compact('title'));
    }
    public function paymentdetails()
    { 
        $title='Conference Payment';
        return view('frontend.conference.payment', compact('title'));
    }
}
