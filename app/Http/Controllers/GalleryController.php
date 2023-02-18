<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use DB;

class GalleryController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'galleryImage' => 'required',
            'category' => 'required',
        ]);

        $gallery = new Gallery;

        $gallery->galleryImage=$request->galleryImage;
        $gallery->category = $request->category;

        if($galleryImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$galleryImage->getClientOriginalExtension();
            $galleryImage->move($destinationPath, $profileImage);
            $gallery->galleryImage = $profileImage;
        }

        $gallery->save();

        return redirect()->route('galleryinput')->with('success', 'Gallery Added Successfully');

    }

    public function index() {
        $data = Gallery::latest()->paginate(15);
        //dd($data);
        return view('gallery/galleryshow', compact('data'))->with('i', (request()->input('page', 1) - 1) * 15);

    }

    public function create(){
        return view('gallery.galleryinput');
    }

    public function show(Gallery $gallery){
        return view('gallery.show', compact('gallery'));

    }

    public function edit(Gallery $gallery) {
        return view('gallery.edit',compact('gallery'));
    }

    public  function update(Request $request, Gallery $gallery) {
        $request->validate([
            'category' => 'required',
            'galleryImage' => 'required',
         ]);

         $input = $request->all();

         if($galleryImage = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$galleryImage->getClientOriginalExtension();
            $galleryImage->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
         }
         else {
            unset($input['image']);
         }

        $gallery->update($input);

        return redirect()->route('galleryshow')->with('success', 'Gallery Updated Successfully');

    }

    public function destroy(Gallery $gallery) {
        $gallery->delete();

        return redirect()->route('galleryshow')->with('success', 'Gallery Deleted Successfully');
    }

}
