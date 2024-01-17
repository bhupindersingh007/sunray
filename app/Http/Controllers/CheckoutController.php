<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;


class CheckoutController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (session()->has('cart_items') == null || session('cart_items') == []) {

            return redirect()->route('home');

        }

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

        $subTotal = 0;

        $cartItems = session('cart_items');

        if(session()->has('cart_items')){

            foreach ($cartItems as $key => $cartItem) {

                $subTotal += $cartItem->price * $cartItem->quantity;
                
            }
        }

        $tax = $subTotal * 0.05;


        DB::transaction(function() use($subTotal, $tax, $request, $cartItems){


            $order = Order::create([
                'order_number' => Order::orderNumber(),
                'user_id' => auth()->id(),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'postal' => $request->postal,
                'order_notes' => $request->order_notes,
                'subtotal' => $subTotal,
                'tax' => $tax,
                'total' => $subTotal + $tax
            ]);

            foreach ($cartItems as $cartItem) {
                
                OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->price
                ]);

            }

        });


        // reset cart
        session()->forget('cart_items');


        return redirect()->route('confirmation');

    }

    
}
