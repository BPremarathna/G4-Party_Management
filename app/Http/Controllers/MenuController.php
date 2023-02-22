<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Venue;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create() {
        $ven = Venue::all();
        return view('venue.menuinput')->with('ven',$ven);
    }
    public function store(Request $request)
    {
        $request->validate([
            'menuName' => 'required' ,
            'menuImage' => 'required',
            'unitPrice' => 'required' ,
            'type' => 'required',
            'description' => 'required',
        ]);

        $menu = new Menu;

        $menu->menuImage=$request->menuImage;
        $menu->menuName = $request->menuName;
        $menu->unitPrice = $request->unitPrice;
        $menu->type = $request->type;
        $menu->description = $request->description;
        $menu->venues_id = $request->venues_id;

        if($menuImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$menuImage->getClientOriginalExtension();
            $menuImage->move($destinationPath, $profileImage);
            $menu->menuImage = $profileImage;
        }

        $menu->save();

        return redirect()->route('menuinput')->with('success', 'Menu Added Successfully');
        //dd($request);
    }
}
