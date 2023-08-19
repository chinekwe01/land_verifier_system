<?php

namespace App\Http\Controllers;

use App\Models\Registered_Land;
use Illuminate\Http\Request;

class RegisteredLandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registered_Land = Registered_Land::latest()->paginate(3);
        return view('home', compact('registered_Land'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register-land.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'registration_number' => 'required',
            'beacon' => 'required|max:255',
            'survey_plan' => 'required|max:255',
            'deals' => 'required',
            'date_registered' =>'required',
            'owner' =>'required',
            'formerOwner' =>'required',
        ]);
        // dd($request->all());
        $register_land = Registered_Land::create([
            'registration_number' => $request->registration_number,
            'beacon' => $request->beacon,
            'survey_plan' => $request->survey_plan,
            'deals' => $request->deals,
            'date_registered' => $request->date_registered,
            'owner' => $request->owner,
            'formerOwner' => $request->formerOwner,
        ]);

        return redirect()->route('home')->with('success','Land registered successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registered_Land  $registered_Land
     * @return \Illuminate\Http\Response
     */
    public function show(Registered_Land $registered_Land)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registered_Land  $registered_Land
     * @return \Illuminate\Http\Response
     */
    public function edit(Registered_Land $registered_Land)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registered_Land  $registered_Land
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registered_Land $registered_Land)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registered_Land  $registered_Land
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registered_Land $registered_Land)
    {
        //
    }
}
