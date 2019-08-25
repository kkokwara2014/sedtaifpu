<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $pageTitle='Dashboard';
        return view('admin.index',compact('pageTitle'));
    }

    public function create(){
        $pageTitle='Add New Admin';
        return view('admin.create',compact('pageTitle'));
    }


}
