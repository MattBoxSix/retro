@extends('layouts.games')

@section('content')

<div class="row">
  <div class="col-3"></div>
  <div class="col-md-6">
    <h1>Checkout</h1>
    <h4>Your Total Is: £{{ $total }}</h4>
    <form action="{{ route('checkout') }}" method="post" id="checkout-form">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" required>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" class="form-control" required>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <label for="card-name">Card Holder Name</label>
            <input type="text" id="card-name" class="form-control" required>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <label for="card-number">Credit Card Number</label>
            <input type="text" id="card-number" class="form-control" required>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="card-expiry-month">Expiration Month</label>
                <input type="text" id="card-expiry-month" class="form-control" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="card-expiry-year">Expiration Year</label>
                <input type="text" id="card-expiry-year" class="form-control" required>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="form-group">
            <label for="card-cvc">CVC</label>
            <input type="text" id="card-cvc" class="form-control" required>
          </div>
        </div>
      </div>
      {{ csrf_field() }}
      <a href="{{ route('paypal.express-checkout') }}" type="submit" class="btn btn-success">Submit </a>
    </form>
  </div>
  <div class="col-3"></div>
</div>
@endsection
