<?php

namespace App\Http\Controllers;

use App\Models\Photograph;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PhotographController extends Controller
{
    public function create() {
        $sup = Supplier::all();
        return view('photography.photoinput')->with('sup',$sup);
    }

    public function store(Request $request)
    {
        //dd($request->request);
        $request->validate([
            'package' => 'required' ,
            'photoImage' => 'required',
            'unitPrice' => 'required' ,
            'description' => 'required',
        ]);

        $photograph = new Photograph;

        $photograph->photoImage=$request->photoImage;
        $photograph->package = $request->package;
        $photograph->unitPrice = $request->unitPrice;
        $photograph->description = $request->description;
        $photograph->suppliers_id= $request->suppliers_id;

        if($photoImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$photoImage->getClientOriginalExtension();
            $photoImage->move($destinationPath, $profileImage);
            $photograph->photoImage = $profileImage;
        }

        $photograph->save();

        return redirect()->route('photoinput')->with('success', 'Photographer Added Successfully');
        //dd($request);
    }

    public function index() {
        $data = Photograph::latest()->paginate(15);
        //dd($data);
        return view('photography.photoshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);

    }

    public function show (Photograph $photograph){
        return view('photography.show5', compact('photograph'));

    }
}
