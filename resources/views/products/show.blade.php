@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>{{ $product->product_name }}</h2>
            <div>
                {{ $product->product_description }}
            </div>
            <p><strong>${{ $product->product_price }}</strong></p>

            <a href="edit/{{ $product->id }}" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </div>
    </div>
@endsection


