<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'section_one' => 'nullable|string',
            'section_two' => 'nullable|string',
            'image_one' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_one_source' => 'nullable|string|max:255',
            'image_two' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_two_source' => 'nullable|string|max:255',
        ]);

        $imageOneName = null;
        $imageTwoName = null;

        if ($request->hasFile('image_one')) {
            $imageOneName = $request->getSchemeAndHttpHost() . '/assets/images/' . time() . uniqid() . '.' . $request->image_one->extension();
            $request->image_one->move(public_path('/assets/images/'), basename($imageOneName));
        }

        if ($request->hasFile('image_two')) {
            $imageTwoName = $request->getSchemeAndHttpHost() . '/assets/images/' . time() . uniqid() . '.' . $request->image_two->extension();
            $request->image_two->move(public_path('/assets/images/'), basename($imageTwoName));
        }

        $content = new Content;
        $content->title = $request->title;
        $content->sub_title = $request->sub_title;
        $content->section_one = $request->section_one;
        $content->section_two = $request->section_two;
        $content->image_one = $imageOneName;
        $content->image_one_source = $request->image_one_source;
        $content->image_two = $imageTwoName;
        $content->image_two_source = $request->image_two_source;

        $content->save();

        return redirect('/content')->with('status', 'Content saved');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     */
    public function edit(Content $content)
    {
        return view('content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Content  $content
     */
    public function update(Request $request, Content $content)
    {
        if ($request->hasFile('image_one')) {
            $imageOneName = time() . '.' . $request->image_one->extension();
            $request->image_one->move(public_path('assets/images'), $imageOneName);
            $content->image_one = $imageOneName;
        } elseif ($request->hasFile('image_two')) {
            $imageNameTwo = time() . '.' . $request->image_two->extension();
            $request->image_two->move(public_path('assets/images'), $imageNameTwo);
            $content->image_two = $imageNameTwo;
        } else {
            return 'error';
        }

        $content->title = $request->title;
        $content->sub_title = $request->sub_title;
        $content->section_one = $request->section_one;
        $content->section_two = $request->section_two;
        $content->image_one_source = $request->image_one_source;
        $content->image_two_source = $request->image_two_source;

        $content->save();

        return redirect()->route('content.index')->with('status', 'Content has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Content  $content
     * @return Response
     */
    public function destroy(Content $content): RedirectResponse
    {
        $content->delete();

        return redirect('/content')->with('status',   'content has been deleted');
    }
}
