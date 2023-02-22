<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Venue;
use Illuminate\Http\Request;
use DB;


class HallController extends Controller
{
    public function create() {
        $ven = Venue::all();
        return view('venue.hallinput')->with('ven',$ven);
    }

    public function store(Request $request)
    {
        $request->validate([
            'hallName' => 'required' ,
            'hallImage' => 'required',
            'unitPrice' => 'required' ,
            'capacity' => 'required',
            'description' => 'required',
        ]);

        $hall = new Hall;

        $hall->hallImage=$request->hallImage;
        $hall->hallName = $request->hallName;
        $hall->unitPrice = $request->unitPrice;
        $hall->capacity = $request->capacity;
        $hall->description = $request->description;
        $hall->venues_id = $request->venues_id;

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

    public function index() {
        $data = Hall::latest()->paginate(15);
        //dd($data);
        return view('venue.hallshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);
    }
}
