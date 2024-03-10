@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">

        <div class="col-md-6 position-relative">

            <img src="{{ asset('storage/'. $product->image_url) }}" class="img-fluid rounded mb-4 mb-lg-5"
                alt="{{ $product->name }}">

            @if($product->on_sale == true)

            <span class="sale-badge position-absolute top-0 end-0 badge 
                rounded-pill fw-semibold py-2 rounded-circle 
                d-flex justify-content-center align-items-center">SALE</span>

            @endif

        </div>

        <div class="col-md-6 ps-md-4">

            <h3 class="mb-2">{{ $product->name }}</h3>

            <p class="text-muted mb-2">{{ $product->category }}</p>

            <p>{{ $product->short_description }}</p>

            <p>
                @if($product['on_sale'] == true)
                <del class="text-danger">${{ number_format($product->price + $product->price * 0.25, 2) }}</del>
                @endif

                <span class="fw-bold fs-5">${{ $product->price }}</span>
            </p>


            <form action="{{ route('cart.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <select class="form-select" name="quantity" required>
                       <option value="" disabled>Choose...</option>
                       @foreach (range(1, 5) as $item)
                           <option value="{{ $item }}">{{ $item }}</option>
                       @endforeach
                    </select>
                </div>

                <input type="hidden" name="product_slug" value="{{ $product->slug }}">

                <button class="btn btn-primary py-2 mb-5">Add to Cart</button>
            </form>

        </div>
    </div>

    <h5>Description</h5>
    <hr>
    <p>{{ $product->long_description }}</p>
</div>


@endsection