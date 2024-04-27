<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Services\CartService;


class CheckoutController extends Controller
{

    private CartService $cartService;


    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $subTotal = $this->cartService->getCartSubTotal();

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
            'postal' => 'required|size:6',
            'order_notes' => 'nullable|string|max:150',
            'card_number' => 'required|digits:16',
            'expiry_date' => [' required', 'size:5', 'regex:/^(0[1-9]|1[0-2])\/\d{2}$/'],
            'cvv' => 'required|digits:3',
        ]);
        
        
        DB::transaction(function() use($request){
    
            $cartItems = $this->cartService->getCartItems();
            $subTotal = $this->cartService->getCartSubTotal();
            $tax = $subTotal * 0.05;

            Order::createOrder($request, $subTotal, $tax, $cartItems);

        });


        return redirect()->route('confirmation');

    }

    
}
