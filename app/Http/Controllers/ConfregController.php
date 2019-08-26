<?php

namespace App\Http\Controllers;

use App\Confregistration;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Conference Registration';

        $countries=Country::all();
        return view('frontend.conference.registration', compact('title','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'natureofparti'=>'required|string',
            'fullname'=>'required|string',
            'gender'=>'required|string',
            'organization'=>'required|string',
            'address'=>'required|string',
            'country'=>'required|string',
            'phone'=>'required',
            'email'=>'required|email',
            'papertitle'=>'required|string',
            'participation'=>'required|string',
            'modeofpresent'=>'required|string',
            'accommodation'=>'required|string',
        ]);

        $confreg=new Confregistration;
        $confreg->confreg_ref='NCESWD' . date('Y') . '_REG-' . rand(22050, 55509);
        $confreg->natureofparti=$request->natureofparti;
        $confreg->fullname=$request->fullname;
        $confreg->gender=$request->gender;
        $confreg->designation=$request->designation;
        $confreg->department=$request->department;
        $confreg->organization=$request->organization;
        $confreg->address=$request->address;
        $confreg->country_id=$request->country_id;
        $confreg->phone=$request->phone;
        $confreg->email=$request->email;
        $confreg->papertitle=$request->papertitle;
        $confreg->participation=$request->participation;
        $confreg->modeofpresent=$request->modeofpresent;
        $confreg->accommodation=$request->accommodation;
        
        $confreg->save();

        return back()->with('success','Your registration details with ref: '. $confreg->confreg_ref.' have been sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
