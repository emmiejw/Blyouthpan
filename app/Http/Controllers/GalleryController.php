<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $imageName = $request->getSchemeAndHttpHost() . '/assets/images/' . time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('/assets/images/'), $imageName);
        } else {
            return 'error';
        }


        $gallery = new Gallery();
        $gallery->photo = $imageName;
        $gallery->save();

        return redirect('/gallery')->with('status',  'photo has been added');
    }


    public function destroy(Gallery $gallery): RedirectResponse
    {

        $gallery->delete();

        return redirect()->route('gallery.index')->with('status', 'Photo has been updated!');
    }
}
