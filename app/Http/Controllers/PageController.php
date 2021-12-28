<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            return view('userdash');
        }elseif(Auth::user()->hasRole('doctor')){
            return view('dashboard');
        }elseif(Auth::user()->hasRole('admin')){
            return view('dashboard');
        }
    }

    public function profile()
    {
        return view('profile'); 
    }

    public function patients()
    {
        return view('patients'); 
    }
}
