@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2>{{ $product->product_name }}</h2>
            <div>
                {{ $product->product_description }}
            </div>
            <p><strong>${{ $product->product_price }}</strong></p>

            {{-- <a href="{{ Route::get('products/{product}', 'ProductController@edit') }}" class="btn btn-success">Edit</a>
            {{-- <a href="delete/{{ $product->id }}" class="btn btn-danger">Delete*</a> --}}
            <a href="{{ route('products.edit', $product->id) }}" 
                class="btn btn-success">
                Edit
            </a>

            {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" title="delete" class="btn btn-danger">
                    Delete
                </button>
            </form> --}} 
        </div>
    </div>
@endsection


