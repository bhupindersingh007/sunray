<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;
use App\Services\CartService;

class CartController extends Controller
{

    private CartService $cartService;


    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index() 
    {



        $cartItems = $this->cartService->getCartItems();

        $subTotal = $this->cartService->getCartSubTotal();
        
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

        $product = Product::where('slug', $request->product_slug)->FirstOrFail();
        $quantity = $request->quantity ?? 1;

        $this->cartService->addCartItem($product, $quantity);

        return redirect()->back()->with('cart', 'Cart Updated.');

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
    public function update(Request $request, int $id)
    {
        
        $this->cartService->removeCartItem($id);
        
        return redirect()->route('cart.index')->with('cart', 'Cart Updated.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {

        $this->cartService->emptyCart();

        return redirect()->route('cart.index')->with('cart', 'Cart Updated.');
    }
}
