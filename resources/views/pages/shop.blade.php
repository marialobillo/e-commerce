@extends('layouts.app')

@section('content')
    

    @foreach($products as $product)
        <div>
            <h3><a href="/show/{{ $product->id }}">{{ $product->product_name }}</a></h3>
            <strong>
                ${{ $product->product_price }}
            </strong>
            <p>{{ $product->product_description }}</p>
            <hr>
        </div>

    @endforeach
    {{ $products->links() }}
@endsection