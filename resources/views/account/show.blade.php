@extends('layouts.app')
@section('content')

<div class="container mt-5 pb-5">

    <div class="row">
        <div class="col-lg-3">

            @include('partials.sidebar')

        </div>



        <div class="col-lg-9">

            <h4 class="mb-3">My Account</h4>

            <div class="col-md-4 border p-3 rounded text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"
                class="text-brown mb-2"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>

                <p class="mb-1 cl">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</p>
                <p class="mb-0">{{ auth()->user()->email }}</p>

            </div>

        </div>
    </div>
</div>
@endsection