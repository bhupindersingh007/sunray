@extends('layouts.app')

@section('content')

@include('partials.hero')


{{-- featured --}}
<section class="container mb-4">

    <header class="row align-items-center mb-4">
        <div class="col-8">
            <h4 class="mb-0">Featured Products</h4>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a href="{{ route('products.index') }}?type=featured" class="text-muted small">See More</a>
        </div>
    </header>

    @if($featuredProducts->count() > 0)

    <div class="row">

        @foreach($featuredProducts as $product)

        <div class="col-md-6 col-lg-4 mb-4">
            @include('partials.card')
        </div>

        @endforeach

    </div>

    @else

    <p class="text-muted">No Featured Products Found</p>

    @endif


</section>



{{-- special offers --}}
<section class="container">

    <header class="row align-items-center mb-4">
        <div class="col-8">
            <h4 class="mb-0">Special Offers</h4>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <a href="{{ route('products.index') }}?type=sale" class="text-muted small">See More</a>
        </div>
    </header>

    @if($productsOnSale->count() > 0)

    <div class="row">

        @foreach($productsOnSale as $product)

        <div class="col-md-6 col-lg-4 mb-4">
            @include('partials.card')
        </div>

        @endforeach

    </div>

    @else

    <p class="text-muted">No Specail Offers Found</p>

    @endif


</section>

@include('partials.sale')


@endsection