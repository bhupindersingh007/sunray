<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {

        $subTotal = 0;

        $cartItems = session('cart_items');

        if(session()->has('cart_items')){

            foreach ($cartItems as $key => $cartItem) {

                $subTotal += $cartItem->price * $cartItem->quantity;
                
            }
        }
        
        return view('cart.index', compact('cartItems', 'subTotal'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $product = Product::FindOrFail($request->product_id);
        $quantity = $request->quantity ?? 1;

        $productFound = false;

        if(session()->has('cart_items')) {

            foreach (session('cart_items') as &$cartItem) {

                if (isset($cartItem['product_id']) && $cartItem['product_id'] == $product->id) {

                    // product found in the array, so update quantity

                    $cartItem['quantity'] = $cartItem['quantity'] + $quantity;
                    $productFound = true;

                    break;
                }
            }

        }

        if(!$productFound) {

            $product['product_id'] = $product->id;
            $product['quantity'] = $quantity;

            // product not found in the cart, so add it
            session()->push('cart_items', $product);

        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
