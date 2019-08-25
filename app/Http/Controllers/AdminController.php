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
        return view('admin.users.alladmins',compact('pageTitle'));
    }
    
    public function store(Request $request){

        $this->validate($request,[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        $newUser=new User;
        $newUser->name=$request->name;
        $newUser->email=$request->email;
        $newUser->password=bcrypt($request->password);

        $newUser->save();
       
        return redirect()->route('admin.admins.all');
    }


}
