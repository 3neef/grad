<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visits = $request->validate(
            [
                'user_id' => ['required'],
                'symptoms' => ['required', 'string', 'max:255'],
                'doctor_name' => ['required', 'string', 'max:255'],
                'hospital' => ['required', 'string', 'max:255'],
                'diagnosis' => ['required', 'string', 'max:255'],
                'medicine' => ['required', 'string', 'max:255'],
                'prescription' => ['required', 'string', 'max:255'],
                'lap_tests' => ['required', 'string', 'max:255'],
                'department' => ['required', 'string', 'max:255'],
            ]
        );
        $visit = Visit::create($visits);
        $visit->save();
        return redirect()->route('personals.create')->with('success', 'Visit Information has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
