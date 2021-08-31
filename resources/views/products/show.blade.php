@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>{{ $product->product_name }}</h2>
            <div>
                {{ $product->product_description }}
            </div>
            <p><strong>${{ $product->product_price }}</strong></p>
        </div>
    </div>
@endsection


