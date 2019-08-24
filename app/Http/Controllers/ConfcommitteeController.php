<?php

namespace App\Http\Controllers;

use App\Confcommittee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfcommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle='All Conference Committee';
        $confcommittees = Confcommittee::orderBy('created_at','desc')->get();
        return view('admin.confcommittee.index', compact('pageTitle','confcommittees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle='Add Committee Member';
        return view('admin.confcommittee.create',compact('pageTitle'));
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
            'title' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'institution' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $confcommittee = new Confcommittee;

        $confcommittee->title = $request->title;
        $confcommittee->name = $request->name;
        $confcommittee->designation = $request->designation;
        $confcommittee->institution = $request->institution;
        $confcommittee->phone = $request->phone;
        $confcommittee->email = $request->email;

        $confcommittee->save();

        return redirect(route('admin.confcommittee.all'))->with('success', 'Committee Member created successfully!');
        // ->back()->with('success', 'Your message has been sent successfully!');
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
