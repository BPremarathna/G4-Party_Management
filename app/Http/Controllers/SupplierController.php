<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;

class SupplierController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
            'companyName' => 'required',
            ]);

            $supplier = new Supplier;

            $supplier->firstName = $request->firstName;
            $supplier->lastName = $request->lastName;
            $supplier->mobile = $request->mobile; 
            $supplier->email = $request->email;
            $supplier->address = $request->address;
            $supplier->companyName = $request->companyName;

            $supplier->save();

        return redirect()->route('addsupplier')->with('success', 'Suppliers Added Successfully');
}

}