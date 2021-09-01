@extends('layouts.app')

@section('content')
    <div class="row">
        <a href="/products" class="btn btn-info">Back to Product Catalog</a>
    </div>
    <div class="card">
        <div class="card-body">
            <h2>{{ $product->product_name }}</h2>
            <div>
                {{ $product->product_description }}
            </div>
            <p><strong>${{ $product->product_price }}</strong></p>

            <p>
                <img src="/storage/image/{{ $product->product_image }}" class="" alt="..." width="340px">
            </p>

        
            <a href="{{ route('products.edit', $product->id) }}" 
                class="btn btn-success">
                Edit
            </a>

            {!! Form::open([ 'route' => ['products.destroy', $product->id],
                            'method' => 'DELETE', 'class' => 'float-right'
            ]) !!}
            {{ Form::token() }} 
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection


