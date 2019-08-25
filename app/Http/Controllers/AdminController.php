<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    public function index(){
        $pageTitle='Dashboard';
        return view('admin.index',compact('pageTitle'));
    }

    public function create(){
        $pageTitle='Add New Admin';
        return view('admin.users.create',compact('pageTitle'));
    }

    public function allAdmins(){
        $pageTitle='All Admins';
        $admins=User::orderBy('created_at','desc')->get();
        return view('admin.users.alladmins',compact('pageTitle','admins'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|string|email',
            'password'=>'required|string|min:6',
        ]);

        $newUser=new User;
        $newUser->name=$request->name;
        $newUser->email=$request->email;
        $newUser->password=bcrypt($request->password);

        $newUser->save();
       
        return redirect()->route('admin.admins.all');
    }


}
