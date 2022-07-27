@extends('layout.master')


@section('content')

    <form class="form-signin" action="/create-checkout-session" method="POST">
        @csrf
        <input type="hidden" name="amount" value="{{ request('amount') }}">
        <input type="hidden" name="package_name" value="{{ request('package_name') }}">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h4 mb-5 font-weight-normal">Package Name ({{ request('package_name') }})</h1>
        <button class="btn btn-lg btn-primary " type="submit">Pay Now</button>
        <p class="mt-5 mb-3 text-muted">{{ request('brand_name') }} </p>
    </form>




@endsection
