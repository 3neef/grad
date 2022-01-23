<?php

namespace App\Http\Controllers;

use App\Models\Med;
use App\Models\Personal;
use Illuminate\Http\Request;

class MedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $med=Med::all();
        return view('medicals.index', compact('med'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $med=new Med;
        return view('personals.create')->with('med', $med);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'blood' => ['required', 'string', 'max:255'],
            'alarg' => ['required', 'string', 'max:255'],
            'chron' => ['required', 'string', 'max:255'],
            'insure' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'unique:meds'],
        ]);

       $med = Med::create([
            'blood' => $request->blood,
            'alarg' => $request->alarg,
            'chron' => $request->chron,
            'insure' => $request->insure,
            'user_id' => $request->user_id,
        ]);

        $med->save();
        return redirect()->route('personals.create')->with('success', 'Medical Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Med  $med
     * @return \Illuminate\Http\Response
     */
    public function show(Med $med)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Med  $med
     * @return \Illuminate\Http\Response
     */
    public function edit(Med $med)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Med  $med
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Med $med)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Med  $med
     * @return \Illuminate\Http\Response
     */
    public function destroy(Med $med)
    {
        //
    }
}
