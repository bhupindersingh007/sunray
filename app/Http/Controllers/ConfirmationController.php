<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) 
    {
        
        session()->forget('cart_items');

        return view('confirmation.show');

    }
}
