<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $subTotal = 0;

        $cartItems = session('cart_items');

        if(session()->has('cart_items')){

            foreach ($cartItems as $key => $cartItem) {

                $subTotal += $cartItem->price * $cartItem->quantity;
                
            }
        }

        return view('checkout.create', compact('subTotal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    
}
