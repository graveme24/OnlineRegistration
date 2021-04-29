<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PrimaryInfo extends Controller
{
    
    public function index(){
        return view('pinfo');
    }
    public function create(Request $request){
        $id = $request->input('id');
        $namef = $request->input('namef');
        $namem = $request->input('namem');
        $occuf = $request->input('occuf');
        $occum = $request->input('occum');
        $gname = $request->input('gname');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $id = Auth::id(); 
        $data = array('id'=>$id,'namef'=>$namef,'namem'=>$namem,'occuf'=>$occuf,'occum'=>$occum,'gname'=>$gname,'gender'=>$gender,'address'=>$address);
        DB::table('primary_info')->insert($data);
        $val = array('id'=>$id, 'status'=>'incomplete');
        DB::table('images')->insert($val);
        return redirect('/home');
    }
}
