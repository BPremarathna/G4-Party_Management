<?php

namespace App\Http\Controllers;

use App\Models\Photograph;
use Illuminate\Http\Request;

class PhotographController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'package' => 'required' ,
            'photoImage' => 'required',
            'unitPrice' => 'required' ,
            'description' => 'required',
        ]);

        $photograph = new Photograph;

        //$photograph->photoImage=$request->photoImage;
        $photograph->package = $request->package;
        $photograph->unitPrice = $request->unitPrice;
        $photograph->description = $request->description;

        if($photoImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$photoImage->getClientOriginalExtension();
            $photoImage->move($destinationPath, $profileImage);
            $photograph->photoImage = $profileImage;
        }

        $photograph->save();

        return redirect()->route('photography.input')->width('success', 'Photographer Added Successfully');
        dd($request);
    }
}
