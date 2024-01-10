@extends('layouts.app')

@section('content')

<div class="container mt-5 pb-5">

    <header class="row align-items-center mb-4">
        <div class="col-6">
            <h4 class="mb-0">Shopping Cart</h4>
        </div>
        <div class="col-6 d-flex justify-content-end">
            @if(isset($cartItems) && count($cartItems) > 0)
            <a href="cart.php?action=empty_cart" class="text-muted small">Empty Cart</a>
            @endif
        </div>
    </header>

    @if(isset($cartItems) && count($cartItems) > 0)

    <table class="table table-bordered">
        <thead class="small">
            <tr>
                <th></th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price <sup>(Per Unit)</sup></th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>


            @foreach($cartItems as $cartItem)

            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/'. $cartItem->image_url) }}" alt="{{ $cartItem->name }}"
                            class="rounded me-3" style="width: 5rem;">
                    </div>
                </td>
                <td>{{ $cartItem->name }}</td>
                <td>{{ $cartItem->quantity }}</td>
                <td>${{ $cartItem->price }}</td>
                <td>${{ $cartItem->price * $cartItem->quantity }}</td>
                <td>
                    <a href="#" class="btn btn-primary">&times;</a>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

   
    
    @endif

@endsection