@extends('layouts.app')

@section('content')
    <h2>Show Product</h2>
    <div>
        {{ $product->product_name }}
    </div>
@endsection


