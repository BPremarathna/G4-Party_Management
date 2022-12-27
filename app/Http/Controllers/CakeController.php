<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    //
    public function input(Request $request)
    {
        $request->validate([
            'cakeName' => 'required' ,
            'cakeImage' => 'required',
            'description' => 'required',
            'unitPrice' => 'required' ,
        ]);

        $cake = new Cake;

        //$cake->cakeImage=$request->cakeImage;
        $cake->description = $request->description;
        $cake->cakeName = $request->cakeName;
        $cake->unitPrice = $request->unitPrice;

        if($cakeImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$cakeImage->getClientOriginalExtension();
            $cakeImage->move($destinationPath, $profileImage);
            $cake->cakeImage = $profileImage;
        }

        $cake->save();

        return redirect()->route('cake.input')->width('success', 'Cake Added Successfully');
        dd($request);
    }
}
