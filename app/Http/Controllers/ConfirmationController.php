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

        if (session()->has('cart_items') == null || session('cart_items') == []) {

            return redirect()->route('home');

        }
        
        session()->forget('cart_items');

        return view('confirmation.show');

    }
}
