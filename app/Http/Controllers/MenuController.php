<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
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

        //$hall->hallImage=$request->hallImage;
        $menu->menuName = $request->menuName;
        $menu->unitPrice = $request->unitPrice;
        $menu->type = $request->type;
        $menu->description = $request->description;

        if($menuImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$menuImage->getClientOriginalExtension();
            $menuImage->move($destinationPath, $profileImage);
            $menu->menuImage = $profileImage;
        }

        $menu->save();

        return redirect()->route('venue.menuinput')->width('success', 'Menu Added Successfully');
        dd($request);
    }
}
