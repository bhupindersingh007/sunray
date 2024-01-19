<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) 
    {
     
        $orders = Order::with('orderItems')->simplePaginate();

        return view('orders.index', compact('orders'));

    }
}