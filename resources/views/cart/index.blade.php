@extends('layouts.app')

@section('content')

<div class="container mt-5 pb-5">

    <header class="row align-items-center mb-4">
        <div class="col-6">
            <h4 class="mb-0">Shopping Cart</h4>
        </div>
        <div class="col-6 d-flex justify-content-end">
            @if(isset($cartItems) && count($cartItems) > 0)
            <form action="{{ route('cart.destroy', ['cart' => 'empty']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-muted small btn btn-sm">Empty Cart</a>
            </form>
            @endif
        </div>
    </header>

    @if(isset($cartItems) && count($cartItems) > 0)

    <div class="table-responsive">
        <table class="table table-bordered" style="min-width: 30rem;">
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
                    <td style="width: 7rem;">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('storage/'. $cartItem->image_url) }}" alt="{{ $cartItem->name }}"
                                class="rounded w-100" style="min-width: 5rem;">
                        </div>
                    </td>
                    <td>{{ $cartItem->name }}</td>
                    <td>{{ $cartItem->quantity }}</td>
                    <td>${{ $cartItem->price }}</td>
                    <td>${{ $cartItem->price * $cartItem->quantity }}</td>
                    <td>
                        <form action="{{ route('cart.update', ['cart' => $cartItem->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">&times;</button>
                        </form>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>

    <!-- cart totals -->
    <div class="row justify-content-end">
        <div class="col-md-6">
            <table class="table border">
                <thead>
                    <tr>
                        <td colspan="2">
                            <h4 class="mb-0">Cart Totals</h4>
                        </td>
                    </tr>
                </thead>
                <tbody class="fw-bold">
                    <tr>
                        <td>Sub Total</td>
                        <td>${{ $subTotal }}</td>
                    </tr>
                    <tr>
                        <td>Tax (5%)</td>
                        <td>${{ number_format($subTotal * 0.05, 2) }}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>${{ number_format($subTotal + ($subTotal * 0.05), 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-end mb-4">

        @auth
        <a href="{{ route('checkout.create') }}" class="btn btn-primary px-3 py-2">Checkout</a>
        @endauth

        @guest
        <p class="text-muted">
            Please
            <a href="{{ route('register.create') }}">Register</a> / <a href="{{ route('login.create') }}">Login</a>
            to Complete Checkout.
        </p>
        @endguest

    </div>


    @else

    <p class="text-muted">
        Cart is empty <a href="{{ route('products.index') }}">Back to Shop</a>
    </p>


    @endif

    @endsection