<?php

namespace App\Http\Controllers;

use App\Models\Decoration;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DecorationController extends Controller
{

    public function create() {
        $sup = Supplier::all();
        return view('decoration.decoinput')->with('sup',$sup);
    }

    public function store(Request $request)
    {
        //dd($request->request);
        $request->validate([
            'decoName' => 'required' ,
            'decoImage' => 'required',
            'description' => 'required',
            'unitPrice' => 'required' ,
        ]);
        //dd($request);
        $decoration = new Decoration;

        $decoration->decoImage=$request->decoImage;
        $decoration->description = $request->description;
        $decoration->decoName = $request->decoName;
        $decoration->unitPrice = $request->unitPrice;
        $decoration->suppliers_id= $request->suppliers_id;

        if($decoImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$decoImage->getClientOriginalExtension();
            $decoImage->move($destinationPath, $profileImage);
            $decoration->decoImage = $profileImage;
        }

        $decoration->save();

        return redirect()->route('decoration.decoinput')->with('success', 'Decoration Added Successfully');
        //dd($request);
    }

    public function index() {
        $data = Decoration::latest()->paginate(15);
        //dd($data);
        return view('decoration.decoshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);

    }

    public function show (Decoration $decoration){
        return view('decoration.show1', compact('decoration'));

    }


}
