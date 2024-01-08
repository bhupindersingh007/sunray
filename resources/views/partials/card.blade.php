<article class="card border-0 position-relative">

    @if(true)

    <span class="sale-badge position-absolute top-0 end-0 badge 
        rounded-pill fw-semibold py-2 rounded-circle 
        d-flex justify-content-center align-items-center">SALE</span>

    @endif


    <a href="#">

        <img src="https://placehold.co/400x300" class="card-img-top object-fit-contain rounded" alt="">

    </a>

    <div class="card-body px-0">

        <h5 class="card-title">
            {{ 'Classic Black Sunglasses' }}
        </h5>

        <p class="small text-muted mb-2">
            {{ 'sunglasses' }}
        </p>

        <p class="card-text">

            @if(true)
            <del
                class="small">${{ number_format(99, 2); }}</del>
            @endif

            <span
                class="fw-bold">${{ '99.00' }}</span>
        </p>

        <a href="#" class="btn btn-primary w-100 py-2">Add to Cart</a>
    </div>
</article>