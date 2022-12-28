<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'venueImage' => 'required',
            'description' => 'required',
        ]);

        $venue = new Venue;

        //$venue->venueImage=$request->venueImage;
        $venue->description = $request->description;

        if($venueImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$venueImage->getClientOriginalExtension();
            $venueImage->move($destinationPath, $profileImage);
            $venue->venueImage = $profileImage;
        }

        $venue->save();

        return redirect()->route('venue.input')->width('success', 'Venue Added Successfully');
        dd($request);
    }
}
