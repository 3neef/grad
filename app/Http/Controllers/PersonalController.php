<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Personal;
use App\Models\User;


class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->id();
        $personals = User::with('personal','med')->where('id', $id)->get();
        // dd ($personals);
        $user= Auth::user();
        return view('medicals.personal')->with('personals', $personals)->with('user', $user);
        // $id = auth()->id();
        // $personal = Personal::where('user_id', $id)->get();
        // $user= Auth::user();
        // return view('medicals.personal')->with('personal', $personal )->with('user', $user);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal = new Personal;
        return view('medicals.create')->with('personal', $personal);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        // dd($request->all());
        
        $request->validate([
            'user_id' => ['required', 'unique:personals'],
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'phone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'passport' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            
            
        ]);
        
        $personal = Personal::updateOrCreate([
            'user_id' => $request->user_id,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'age' => $request->age,
            'phone' => $request->phone,
            'gender'=>$request->gender,
            'passport'=>$request->passport,
            'country'=>$request->country,
            'city'=>$request->city,
            'state'=>$request->state,
            'adress'=>$request->adress,
        ]);
        
        // $id = Auth::user()->id;
        // $personal = Personal::find($id);
       
        // return redirect()->route('personal.index');
       
        
        $personal->save();
        
        
        
        return redirect()->route('personals.create')->with('success', 'Personal Information has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $personals = User::with('personal','med')->where('id', $id)->get();
        // // dd ($personals);
        // $user = User::find($id);
        // return view('medicals.show', compact('personals'))->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function export(Personal $personal)
    {
        $personals = User::with('personal','med')->where('id', $personal)->get();
        // dd ($personals);
        
        $user = User::find($personal->user_id);
        return view('medicals.show', compact('personals'))->with('user', $user);
        // return view('medicals.export', compact('personal'));
    }

    
    public function edit(Personal $personal)
    {
        $personals = User::with('personal','med')->where('id', $personal)->get();
        
        $user = User::find($personal->user_id);
        return view('medicals.edit', compact('personals'))->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        $personals = $request->validate([
           
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'phone' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'passport' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            
            
        ]);
        $personal->update($personals);
        return redirect()->route('personals.edit', Auth::id())->with('success', 'Personal Information has been updated');


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
