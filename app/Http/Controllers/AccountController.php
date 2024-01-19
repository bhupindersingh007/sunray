<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AccountController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) 
    {
     
        return view('account.show');

    }
}
