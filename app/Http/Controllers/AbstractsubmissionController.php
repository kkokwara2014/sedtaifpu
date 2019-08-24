<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Abstractsubmission;
use App\Country;

class AbstractsubmissionController extends Controller
{
    public function showsubmissionpage()
    {

        $title = 'Submit Abstract';
        $countries = Country::all();
        return view('frontend.abstractpaper.submit', compact('title', 'countries'));
    }

    public function submitabstract(Request $request)
    {

        $this->validate($request, [
            'leadauthor' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'papertitle' => 'required',
            'abstract' => 'required',
            'filename' => 'required|file|max:5000|mimes:docx,doc',
        ]);


        if ($request->hasFile('filename')) {
            $filenameWithTime = time() . '_' . $request->filename->getClientOriginalName();
            $filenameToStore = $request->filename->storeAs('public/submittedabstracts', $filenameWithTime);
        }

        //    create an instance of Paper
        $abstractPaper = new Abstractsubmission;
        $abstractPaper->abstract_ref = 'NCESWD' . date('Y') . '-' . rand(66050, 88855);
        $abstractPaper->leadauthor = $request->leadauthor;
        $abstractPaper->email = $request->email;
        $abstractPaper->phone = $request->phone;
        $abstractPaper->country_id = $request->country_id;
        $abstractPaper->papertitle = $request->papertitle;
        $abstractPaper->abstract = $request->abstract;
        $abstractPaper->filename = $filenameToStore;

         $abstractPaper->save();
        
        return redirect()->back()->with('success', 'Your abstract with ref: ' . $abstractPaper->abstract_ref . ' has been submitted successfully!');
    }
}
