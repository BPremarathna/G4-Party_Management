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

    public function index() {
        $data = Supplier::latest()->paginate(25);
        //dd($data);
        return view('supplier/suppliershow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 25);

    }

    public function create(){
        return view('supplier.addsupplier');
    }

    public function show (Supplier $supplier){
        return view('supplier.show', compact('supplier'));

    }








}
