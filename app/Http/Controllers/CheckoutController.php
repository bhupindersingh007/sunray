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
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone_number' => 'required|string|max:10',
            'address' => 'required|string|max:150',
            'postal' => 'required|string|max:6',
            'order_notes' => 'nullable|string|max:150',
            'card_number' => 'required|string|max:16',
            'expiry_date' => 'required|string|max:5',
            'cvv' => 'required|numeric',
        ]);

        // checkout logic 


    }

    
}
