@if(session('cart'))

<div class="position-fixed bottom-0 end-0 z-3 col-12 col-md-4">
    <article class="alert bg-white shadow-sm fade show d-flex align-items-center justify-content-between mx-3"
        id="cart-message">
        <div class="d-flex align-items-center">
            <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" class="text-brown"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                <line x1="3" y1="6" x2="21" y2="6">
                </line>
                <path d="M16 10a4 4 0 0 1-8 0"></path>
            </svg>
            <span class="mx-1">{{ session('cart') }}</span>
            <a href="{{ route('cart.index') }}" class="small">View Cart</a>
        </div>
        <button class="btn btn-close" data-bs-dismiss="alert"></button>
    </article>
</div>

@endif


@if(session('success'))

<div class="position-fixed bottom-0 end-0 z-3 col-12 col-md-4">
    <article class="alert bg-white shadow-sm fade show d-flex align-items-center justify-content-between mx-3" id="success">
        <div class="d-flex align-items-center">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-brown">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            <span class="mx-1">{{ session('success') }}</span>
        </div>
        <button class="btn btn-close" data-bs-dismiss="alert"></button>
    </article>
</div>

@endif

