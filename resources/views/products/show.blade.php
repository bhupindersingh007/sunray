@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">

        <div class="col-md-6 position-relative">

            <img src="{{ asset('storage/'. $product->image_url) }}" 
            class="img-fluid rounded mb-4 mb-lg-5" alt="{{ $product->name }}">

            @if($product->on_sale == true)

            <span class="sale-badge position-absolute top-0 end-0 badge 
                rounded-pill fw-semibold py-2 rounded-circle 
                d-flex justify-content-center align-items-center">SALE</span>

            @endif

        </div>

        <div class="col-md-6 ps-md-4">

            <h3 class="mb-2">{{ $product->name }}</h3>

            <p class="text-muted mb-2">{{ $product->category }}</p>

            <p>{{ $product->description }}</p>

            <p>
                @if($product['on_sale'] == true)
                    <del class="small">${{ number_format($product->price + $product->price * 0.25, 2) }}</del>
                @endif

                <span class="fw-bold fs-5">${{ $product->price }}</span>
            </p>

            <form action="cart.php">

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="1" min="1" required>
                </div>

                <input type="hidden" name="action" value="add_cart">
                <input type="hidden" name="product_id" value="{{ $product->id }}">


                <button class="btn btn-primary py-2 mb-5">Add to Cart</button>

            </form>
        </div>
    </div>

    <h5>Description</h5>
    <hr>
    <p>{{ $product->description }}</p>
</div>


@endsection