<?php

namespace App\Http\Controllers\Web\Media;

use App\Models\Web\Image;

class ImageController
{
    public function create()
    {
        return view('image.create');
    }

    public function store()
    {
        /** @var Image $image */
        $image = Image::create();

        $image
            ->addMediaFromRequest('image')
            ->toMediaCollection();

        return back();
    }

//    public function store(Request $request)
//    {
//        $categories = new ProductCategories();
//        $categories->name         = $request->name;
//        $categories->slug         = $request->slug;
//        $categories->description  = $request->description;
//
//        if($request->hasFile('photo') && $request->file('photo')->isValid()){
//            $categories->addMediaFromRequest('photo')->toMediaCollection('category');
//        }
//
//        $categories->save();
//        $request->session()->flash('message', 'Successfully created category');
//        return redirect()->back();
//    }

    public function index()
    {
        //$lists = ProductCategories::all();
     //   $lists = Image::last();
        $lists = Image::all();
    //    return view('image.show', [ 'lists' => $lists ]);

        return view('image.show', [ 'lists' => $lists ]);
    }

}
