<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\Supplier;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function create() {
        $sup = Supplier::all();
        return view('venue.venueinput')->with('sup',$sup);
    }

    public function store(Request $request)
    {
        $request->validate([
            'venueImage' => 'required',
            'venueName' => 'required',
            'location' => 'required',
        ]);

        $venue = new Venue;

        $venue->venueImage=$request->venueImage;
        $venue->venueName = $request->venueName;
        $venue->location = $request->location;
        $venue->suppliers_id= $request->suppliers_id;

        if($venueImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$venueImage->getClientOriginalExtension();
            $venueImage->move($destinationPath, $profileImage);
            $venue->venueImage = $profileImage;
        }

        $venue->save();

        return redirect()->route('venueinput')->with('success', 'Venue Added Successfully');
        //dd($request);
    }

    public function index() {
        $data = Venue::latest()->paginate(15);
        //dd($data);
        return view('venue.venueshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);

    }

    public function show (Venue $venue){
        return view('venue.show7', compact('venue'));

    }
}
