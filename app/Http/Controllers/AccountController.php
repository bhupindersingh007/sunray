<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AccountController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) 
    {
     
        $orders_count = Order::where('user_id', auth()->id())->count();

        return view('account.show', compact('orders_count'));

    }
}
