<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;

class CakeController extends Controller
{
    public function create() {
        $sup = Supplier::all();
        return view('cake.cakeinput')->with('sup',$sup);
    }
    public function store(Request $request)
    {
        //dd($request->request);
        $request->validate([
            'cakeName' => 'required' ,
            'cakeImage' => 'required',
            'description' => 'required',
            'unitPrice' => 'required' ,
        ]);
        //dd($request);
        $cake = new Cake;

        $cake->cakeImage=$request->cakeImage;
        $cake->description = $request->description;
        $cake->cakeName = $request->cakeName;
        $cake->unitPrice = $request->unitPrice;
        $cake->suppliers_id= $request->suppliers_id;

        if($cakeImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$cakeImage->getClientOriginalExtension();
            $cakeImage->move($destinationPath, $profileImage);
            $cake->cakeImage = $profileImage;
        }

        $cake->save();

        return redirect()->route('cakeinput')->with('success', 'Cake Added Successfully');
        //dd($request);
    }

    public function index() {
        $data = Cake::latest()->paginate(15);
        //dd($data);
        return view('cake.cakeshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function show (Cake $cake){
        return view('cake.show4', compact('cake'));

    }

    public function edit(Cake $cake) {
        return view('cake.edit4',compact('cake'));
    }

    public  function update(Request $request, Cake $cake) {
        $request->validate([
            'cakeName' => 'required',
            'cakeImage' => 'required',
            'description' => 'required',
            'unitPrice' => 'required' ,
         ]);

         $input = $request->all();

         if($cakeImage = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$cakeImage->getClientOriginalExtension();
            $cakeImage->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
         }
         else {
            unset($input['image']);
         }

        $cake->update($input);

        return redirect()->route('cakeshow')->with('success', 'Gallery Updated Successfully');

    }


    public function destroy(Cake $cake) {

        $cake->delete();

        return redirect()->route('cakeshow')->with('success', 'Gallery Deleted Successfully');
    }
}
