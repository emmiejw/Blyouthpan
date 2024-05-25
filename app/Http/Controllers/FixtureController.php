<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FixtureController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function create(): View
    {
        return view('fixtures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fixture = new Fixture();
        $fixture->name = $request->name;
        $fixture->location = $request->location;
        $fixture->date_time = $request->date_time;

        $fixture->save();

        return redirect('/fixtures')->with('status',   $fixture->name . ' has been added for ' . Carbon::parse($fixture->date_time)->toDayDateTimeString());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function show(Fixture $fixture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function edit(Fixture $fixture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fixture $fixture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fixture  $fixture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fixture $fixture)
    {
        //
    }
}
