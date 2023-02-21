<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Supplier;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function create() {
        $sup = Supplier::all();
        return view('invitation.cardinput')->with('sup',$sup);
    }
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required' ,
            'cardImage' => 'required',
            'unitPrice' => 'required' ,
        ]);

        $invitation = new Invitation;

        $invitation->cardImage=$request->cardImage;
        $invitation->type = $request->type;
        $invitation->unitPrice = $request->unitPrice;
        $invitation->suppliers_id= $request->suppliers_id;

        if($cardImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$cardImage->getClientOriginalExtension();
            $cardImage->move($destinationPath, $profileImage);
            $invitation->cardImage = $profileImage;
            $invitation->suppliers_id= $request->suppliers_id;
        }

        $invitation->save();

        return redirect()->route('cardinput')->with('success', 'Invitation-Card Added Successfully');
        //dd($request);
    }

    public function index() {
        $data = Invitation::latest()->paginate(15);
        //dd($data);
        return view('invitation.cardshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);

    }

    public function show (Invitation $invitation){
        return view('invitation.show6', compact('invitation'));

    }
}
