<article class="card border-0 position-relative">

    @if($product->on_sale == true)

    <span class="sale-badge position-absolute top-0 end-0 badge 
        rounded-pill fw-semibold py-2 rounded-circle 
        d-flex justify-content-center align-items-center">
        SALE
    </span>

    @endif


    <a href="{{ route('products.show', ['product' => $product]) }}">
        <img src="{{ asset('storage/'. $product->image_url) }}" 
        class="card-img-top object-fit-contain rounded" alt="{{ $product->name  }}">
    </a>

    <div class="card-body px-0">

        <h5 class="card-title">{{ $product->name }}</h5>

        <p class="small text-muted mb-2">{{ $product->category }}</p>

        <p class="card-text">

            @if($product->on_sale == true)
            <del class="small">${{ number_format($product->price + $product->price * 0.25, 2); }}</del>
            @endif

            <span class="fw-bold">${{ $product->price }}</span>
        </p>

        
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary w-100 py-2">Add to Cart</button>
        </form>
    </div>
</article>