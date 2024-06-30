<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManagerRequest;
use App\Models\Manager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ManagerController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function create(): View
    {
        return view('managers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $manager = new Manager;
        $manager->name = $request->name;
        $manager->role = $request->role;
        $manager->about_me = $request->about_me;
        $manager->email = $request->email;
        $manager->mobile = $request->mobile;
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images'), $imageName);
            $manager->photo = $imageName;
        }
        $manager->save();

        return redirect('/managers')->with('status',   $manager->name . ' has been added as a ' . $manager->role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     */
    public function edit(Manager $manager): View
    {
            return view('managers.edit', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Manager  $manager
     */
    public function update(Request $request, Manager $manager): RedirectResponse
    {
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets/images'), $imageName);
            $manager->photo = $imageName;
        }

        $manager->name = $request->name;
        $manager->email = $request->email;
        $manager->mobile = $request->mobile;
        $manager->role = $request->role;
        $manager->about_me = $request->about_me;

        $manager->save();

        return redirect()->route('managers.index')->with('status', $manager->name . ' has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Manager  $manager
     * @return Response
     */
    public function destroy(Manager $manager): RedirectResponse
    {
        $manager->delete();

        return redirect('/managers')->with('status',   'a manager/coach has been deleted');
    }
}
