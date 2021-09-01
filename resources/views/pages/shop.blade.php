@extends('layouts.app')

@section('menu-actions')
<div class="">
    <div class="clearfix">
        <a href="{{ URL::to('products/create') }}" class="btn btn-info">New Product</a>
    </div>
  </div>
 
@endsection

@section('content')

    <div class="row">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            {{ Session::put('success', null) }}
        </div>
        @endif
    </div>
    

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb3">
                <div class="card">
                    <div class="card-body">
                        <h3><a href="{{ route('products.show', $product->id) }}">
                            {{  $product->product_name  }}</a>
                        </h3>
                        <strong>
                            ${{ $product->product_price }}
                        </strong>
                        <p>{{ $product->product_description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- {{ $products->links() }} --}}
@endsection

