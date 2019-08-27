<?php

namespace App\Http\Controllers;

use App\Abstractsubmission;
use App\Confcommittee;
use App\Confregistration;
use App\Contact;
use App\Fullpapersubmission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    public function index(){
        $pageTitle='Dashboard';
        $totalAdmins=User::count();
        $totalContacts=Contact::count();
        $totalCommittees=Confcommittee::count();
        $totalAbstracts=Abstractsubmission::count();
        $totalFullPapers=Fullpapersubmission::count();
        $totalRegistrations=Confregistration::count();
        return view('admin.index',compact('pageTitle','totalAdmins','totalContacts','totalCommittees','totalAbstracts','totalFullPapers','totalRegistrations'));
    }

    public function create(){
        $pageTitle='Add New Admin';
        return view('admin.users.create',compact('pageTitle'));
    }

    public function edit($id){
        $pageTitle='Edit Admin';

        $admins=User::where('id',$id)->first();
        return view('admin.users.edit',compact('pageTitle','admins'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|string|email',
            // 'password'=>'required|string|min:6',
        ]);

        $newUser=User::find($id);
        $newUser->name=$request->name;
        $newUser->email=$request->email;
        // $newUser->password=bcrypt($request->password);

        $newUser->save();
       
        return redirect(route('admin.admins.all'));
    }

    public function destroy($id){
        $admins=User::where('id',$id)->delete();
        return redirect()->back();
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
