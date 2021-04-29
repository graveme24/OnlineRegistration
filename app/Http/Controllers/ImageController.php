<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view('imginfo');        
    }

    public function store(Request $request)
    {
        $input = $request->all();

        request()->validate([
            'report_card' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'birth_cert' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gcash_payment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $input['report_card'] = $imageName;
        $input['birth_cert'] = $imageName;
        $input['gcash_payment'] = $imageName;
        request()->image->move(public_path('images'), $imageName);

        Image::create($input);
        return back()->with('success','Image Upload Successfully');

    }
}
