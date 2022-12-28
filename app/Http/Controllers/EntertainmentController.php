<?php

namespace App\Http\Controllers;

use App\Models\Entertainment;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required' ,
            'bandImage' => 'required',
            'unitPrice' => 'required' ,
        ]);

        $entertainment = new Entertainment;

        //$entertainment->bandImage=$request->bandImage;
        $entertainment->category = $request->category;
        $entertainment->unitPrice = $request->unitPrice;

        if($bandImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$bandImage->getClientOriginalExtension();
            $bandImage->move($destinationPath, $profileImage);
            $entertainment->bandImage = $profileImage;
        }

        $entertainment->save();

        return redirect()->route('entertain.input')->width('success', 'Entertainment-Band Added Successfully');
        dd($request);
    }
}
