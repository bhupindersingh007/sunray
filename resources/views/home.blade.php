@extends('layouts.app')

@section('content')

@include('partials.hero')



<!-- featured -->
<section class="container mb-4">

    <header class="row align-items-center mb-4">
        <div class="col-6">
            <h4 class="mb-0">Featured Products</h4>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="products.php?type=featured" class="text-muted small">See More</a>
        </div>
    </header>


    @if(true)

    <div class="row">

        @foreach(range(0, 2) as $product)

        <!-- card  -->
        <div class="col-md-6 col-lg-4 mb-4">
            @include('partials.card')
        </div>

        @endforeach

    </div>

    @else

    <p class="text-muted">No Featured Products Found</p>

    @endif


</section>



<!-- special offers -->
<section class="container">

    <header class="row align-items-center mb-4">
        <div class="col-6">
            <h4 class="mb-0">Special Offers</h4>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="products.php?type=sale" class="text-muted small">See More</a>
        </div>
    </header>

    @if(true)

    <div class="row">

        @foreach(range(0, 2) as $product)

        <!-- card  -->
        <div class="col-md-6 col-lg-4 mb-4">
            @include('partials.card')
        </div>

        @endforeach

    </div>

    @else

    <p class="text-muted">No Specail Offers Found</p>

    @endif


</section>






@endsection