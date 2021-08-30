@extends('layouts.app')

@section('content')
    

    @foreach($products as $product)
        <div>
            {{ $product->product_name }}
            <strong>
                ${{ $product->product_price }}
            </strong>
            <p>{{ $product->product_description }}</p>
            <hr>
        </div>

    @endforeach
@endsection