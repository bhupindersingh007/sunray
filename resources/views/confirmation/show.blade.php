@extends('layouts.app')

@section('title', 'Order Confirmation')

@section('content')

<div class="container col-lg-6 mt-5">
    <div class="jumbotron text-center">

        <svg viewBox="0 0 24 24" width="64" height="64" stroke="currentColor" stroke-width="1.5" fill="none"
            stroke-linecap="round" stroke-linejoin="round" class="text-brown mb-3">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>

        <h1 class="display-5">Thank You!</h1>
        <p class="lead">Your order <a href="{{ route('orders.index') }}" class="fw-bold">{{ $orderNumber }}</a> has been confirmed successfully.</p>
        <hr class="my-4">
        <p class="mb-4 text-muted">Thanks for your order. We will let you know once your items have dispatched.</p>

        <a href="{{ route('products.index') }}" class="btn btn-primary py-2 px-3 mb-5">Back to Shop</a>
    </div>
</div>

@endsection