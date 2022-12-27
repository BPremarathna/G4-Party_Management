<?php

namespace App\Http\Controllers;

use App\Models\Decoration;
use Illuminate\Http\Request;

class DecorationController extends Controller
{
    //
    public function input(Request $request)
    {
        $request->validate([
            'decoName' => 'required' ,
            'decoImage' => 'required',
            'description' => 'required',
            'unitPrice' => 'required' ,
        ]);

        $decoration = new Decoration;

        //$decoration->decoImage=$request->decoImage;
        $decoration->description = $request->description;
        $decoration->decoName = $request->decoName;
        $decoration->unitPrice = $request->unitPrice;

        if($decoImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$decoImage->getClientOriginalExtension();
            $decoImage->move($destinationPath, $profileImage);
            $decoration->decoImage = $profileImage;
        }

        $decoration->save();

        return redirect()->route('decoration.input')->width('success', 'Decoration Added Successfully');
        dd($request);
    }
}
