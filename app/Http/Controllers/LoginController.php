<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return auth()->check() 
            ? redirect()->route('home') 
            : view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            $request->session()->regenerate();
                
            $fullName = str()->limit(auth()->user()->fullName, 25);
            return redirect()->route('home')->with('success', "Welcome, $fullName");
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    
}
