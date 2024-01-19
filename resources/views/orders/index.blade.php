@extends('layouts.app')
@section('content')

<div class="container mt-5 pb-5">

    <div class="row">
        <div class="col-lg-4">

            @include('partials.sidebar')

        </div>

        <div class="col-lg-8">

            <h4 class="mb-3">My Orders</h4>


            @if($orders->count() > 0)

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="small">
                        <tr>
                            <th>Order No.</th>
                            <th>Buyer Name</th>
                            <th>Phone No.</th>
                            <th>Address</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($orders as $order)
                         
                        <tr>
                            <td>{{ $order->order_number }}</td>
                            <td>{{ $order->first_name . ' ' . $order->last_name }}</td>
                            <td>{{ $order->phone_number }}</td>
                            <td>{{ $order->address }}</td>
                            <td>${{ $order->total }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary">Products</button>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>


            @else

            <p class="text-muted">No Orders Found</p>

            @endif


        </div>
    </div>
</div>
@endsection