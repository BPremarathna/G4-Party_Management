<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required' ,
            'cardImage' => 'required',
            'unitPrice' => 'required' ,
        ]);

        $invitation = new Invitation;

        //$invitation->cardImage=$request->cardImage;
        $invitation->type = $request->type;
        $invitation->unitPrice = $request->unitPrice;

        if($cardImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$cardImage->getClientOriginalExtension();
            $cardImage->move($destinationPath, $profileImage);
            $invitation->cardImage = $profileImage;
        }

        $invitation->save();

        return redirect()->route('invitation.input')->width('success', 'Invitation-Card Added Successfully');
        dd($request);
    }
}
