<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Fullpapersubmission;

class FullpapersubmissionController extends Controller
{
    public function showsubmissionpage()
    {

        $title = 'Submit Full Paper';
        $countries = Country::all();
        return view('frontend.fullpaper.submit', compact('title', 'countries'));
    }

    public function submitpaper(Request $request)
    {

        $this->validate($request, [
            'leadauthor' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'papertitle' => 'required',
            'filename' => 'required|file|max:5000|mimes:docx,doc',
        ]);


        if ($request->hasFile('filename')) {
            $filenameWithTime = time() . '_' . $request->filename->getClientOriginalName();
            $filenameToStore = $request->filename->storeAs('public/submittedpapers', $filenameWithTime);
        }

        //    create an instance of Paper
        $fullPaper = new Fullpapersubmission;
        $fullPaper->fullpaper_ref = 'NCESWD' . date('Y') . '-' . rand(33050, 66655);
        $fullPaper->leadauthor = $request->leadauthor;
        $fullPaper->email = $request->email;
        $fullPaper->coauthors = $request->coauthors;
        $fullPaper->phone = $request->phone;
        $fullPaper->country_id = $request->country_id;
        $fullPaper->papertitle = $request->papertitle;
        $fullPaper->filename = $filenameToStore;

        $fullPaper->save();

        return redirect()->back()->with('success', 'Your Paper with ref: ' . $fullPaper->fullpaper_ref . ' has been submitted successfully!');
    }
}
