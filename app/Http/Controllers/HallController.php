<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
use DB;


class HallController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'hallName' => 'required' ,
            'hallImage' => 'required',
            'unitPrice' => 'required' ,
            'capacity' => 'required',
            'description' => 'required',
            'venueName' => 'required',
        ]);

        $hall = new Hall;

        $hall->hallImage=$request->hallImage;
        $hall->hallName = $request->hallName;
        $hall->unitPrice = $request->unitPrice;
        $hall->capacity = $request->capacity;
        $hall->description = $request->description;
        $hall->venueName = $request->venueName;

        if($hallImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$hallImage->getClientOriginalExtension();
            $hallImage->move($destinationPath, $profileImage);
            $hall->hallImage = $profileImage;
        }

        $hall->save();

        
        return redirect()->route('hallinput')->with('success', 'Hall Added Successfully');
        //dd($request);
    }
}
