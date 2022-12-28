<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

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

        // $gallery->galleryImage=$request->galleryImage;
        $gallery->category = $request->category;

        if($galleryImage = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmHis') . "." .$galleryImage->getClientOriginalExtension();
            $galleryImage->move($destinationPath, $profileImage);
            $gallery->galleryImage = $profileImage;
        }

        $gallery->save();

        return redirect()->route('gallery.input')->width('success', 'Gallery Added Successfully');
        dd($request);
    }
}
