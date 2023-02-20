<?php

namespace App\Http\Controllers;

use App\Models\Entertainment;
use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;

class EntertainmentController extends Controller
{
    public function create() {
        $sup = Supplier::all();
        return view('entertain.entertaininput')->with('sup',$sup);
    }

    public function store(Request $request)
    {
        //dd($request->request);
        $request->validate([
            'category' => 'required' ,
            'bandImage' => 'required',
            'bandName' => 'required' ,
            'unitPrice' => 'required' ,
        ]);

        $entertainment = new Entertainment;

        $entertainment->bandImage=$request->bandImage;
        $entertainment->category = $request->category;
        $entertainment->bandName = $request->bandName;
        $entertainment->unitPrice = $request->unitPrice;
        $entertainment->suppliers_id= $request->suppliers_id;

        if($bandImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$bandImage->getClientOriginalExtension();
            $bandImage->move($destinationPath, $profileImage);
            $entertainment->bandImage = $profileImage;
        }

        $entertainment->save();

        return redirect()->route('entertaininput')->with('success', 'Entertainment-Band Added Successfully');
        //dd($request);
    }

    public function index() {
        $data = Entertainment::latest()->paginate(15);
        //dd($data);
        return view('entertain.entertainshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);

    }

    public function show (Entertainment $entertainment){
        return view('entertain.show2', compact('entertainment'));

    }
}
