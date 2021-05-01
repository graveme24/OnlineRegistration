<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        return view('admin.adminhome');
    }
    public function profile(){
        return view('admin.adminprofile');
    }
}
