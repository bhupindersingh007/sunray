@extends('layouts.app')

@section('content')

<section class="container my-5">

    <header class="row align-items-center mb-4">
        <div class="col-6">

            <h4 class="mb-0">All Products</h4>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="{{ route('products') }}" class="text-muted small">Reset Filters</a>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-4">
            <aside>
                <form class="d-flex mb-3" role="search" action="{{ route('products') }}">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        name="search" value="">
                    <button class="btn btn-primary" type="submit">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>

                <form action="{{ route('products') }}">
                    <div class="accordion mb-3" id="accordion-filters">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-filters">
                                <div class="accordion-body">

                                    <div class="form-check mb-2">


                                        <input class="form-check-input" type="radio" value="eyeglasses" name="category">
                                        <label class="form-check-label" for="category">
                                            Eye Glasses
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="sunglasses" name="category">
                                        <label class="form-check-label" for="category">
                                            Sun Glasses
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Product Type
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-filters">
                                <div class="accordion-body">


                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="type" value="featured">
                                        <label class="form-check-label" for="type">
                                            Featured
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" value="sale">
                                        <label class="form-check-label" for="type">
                                            On Sale
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mb-4">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                        </svg> Apply Filters
                    </button>
                </form>


            </aside>
        </div>

        <div class="col-lg-8">

            <div class="row">

                @if ($products->count() > 0)
                    
                    @foreach($products as $product)

                    <div class="col-md-6 mb-4">
                        @include('partials.card')
                    </div>

                    @endforeach
                    
                @else
                
                    <p class="text-muted">No Featured Products Found</p>
                    
                @endif

            </div>

            <div class="text-end">
                {{ $products->links() }}
            </div>

        </div>

</section>

@endsection