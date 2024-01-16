@extends('layouts.app')
@section('content')

<div class="container mt-5 pb-5">


	<h4 class="mb-2">Checkout</h4>

	<div class="row">
		<div class="col-lg-7">

            <form action="{{ route('checkout.store') }}" method="POST">

                <h5 class="mt-4">Customer Information</h5>
                <hr>
            
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label" for="first_name" class="text-black">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control mb-3" id="first_name" name="first_name" value="{{ old('first_name') }}">
                        @error('first_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="last_name" class="text-black">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control mb-3" id="last_name" name="last_name" value="{{ old('last_name') }}">
                        @error('last_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label" for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control mb-3" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="phone_number" class="text-black">Phone No.<span class="text-danger">*</span></label>
                        <input type="tel" class="form-control mb-3" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                        @error('phone_number')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="form-label" for="address" class="text-black">Address<span class="text-danger">*</span></label>
                        <input type="text" class="form-control mb-3" id="address" name="address" placeholder="Street address" value="{{ old('address') }}">
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
            
                    <div class="col-md-12">
                        <label class="form-label" for="postal" class="text-black">Postal <span class="text-danger">*</span></label>
                        <input type="text" class="form-control mb-3" id="postal" name="postal" value="{{ old('postal') }}">
                        @error('postal')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group">
                    <label class="form-label" for="order_notes" class="text-black">Order Notes</label>
                    <textarea name="order_notes" id="order_notes" cols="30" rows="3" class="form-control mb-3" placeholder="Write your notes here...">{{ old('order_notes') }}</textarea>
                    @error('order_notes')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            
                <h5 class="mt-4">Payment Information</h5>
                <hr>
            
                <div class="mb-3">
                    <label for="card_number" class="form-label">Card Number</label>
                    <input type="text" class="form-control" id="card_number" name="card_number" value="{{ old('card_number') }}">
                    @error('card_number')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="expiry_date" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiry_date" name="expiry_date" placeholder="MM/YY" value="{{ old('expiry_date') }}">
                        @error('expiry_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
            
                    <div class="col-md-6 mb-3">
                        <label for="cvv" class="form-label">CVV</label>
                        <input type="number" class="form-control" id="cvv" name="cvv" value="{{ old('cvv') }}">
                        @error('cvv')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary px-3 py-2 mb-4">Place Order</button>
            </form>
            
		</div>

		<div class="col-lg-5 mt-lg-3">
			
		</div>
	</div>


</div>


@endsection