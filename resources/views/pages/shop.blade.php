@extends('layouts.app')

@section('content')
    

    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb3">
            <div class="card">

                <div class="card-body">
                    <h3><a href="/show/{{ $product->id }}">{{ $product->product_name }}</a></h3>
                    <strong>
                        ${{ $product->product_price }}
                    </strong>
                    <p>{{ $product->product_description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $products->links() }}
@endsection

