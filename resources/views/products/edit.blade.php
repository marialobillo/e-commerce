@extends('layouts.app')

@section('content')
    <h2>Edit Product</h2>

   

    <div class="card-body">
        {!! Form::open([
                'action' => ['App\Http\Controllers\ProductController@update',$product->id], 
                'method' => 'PUT',
                'class' => 'form',
                'files' => 'true']) !!}  
                {{ Form::token() }} 
                {{ Form::hidden('_method', 'PUT') }} 
            <div class="form-group">
            
                {{ Form::label('', 'Name') }}
                {{ Form::text('product_name', $product->product_name, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('', 'Price') }}
                {{ Form::text('product_price', $product->product_price, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('', 'Image') }}
                {!! Form::file('product_image', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {{ Form::label('', 'Description') }}
                {{ Form::textarea('product_description', $product->product_description, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
               {{ Form::submit('Update Product', ['class' => 'btn btn-info']) }}
            </div>

    </div>
@endsection


