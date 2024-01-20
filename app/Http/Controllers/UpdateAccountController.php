<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateAccountController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('account.update-account');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|unique:users,email|max:50',
        ]);

        // validation todo : ignore current user email when considering unique email

    }

    
}
