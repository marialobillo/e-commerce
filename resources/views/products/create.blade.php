@extends('layouts.app')

@section('content')
    <h2>Show Product</h2>

   

    <div class="card-body">
        {!! Form::open([
                'url' => '/products', 
                'method' => 'POST',
                'class' => 'form',
                'files' => 'true'
                ]) !!}  
                {{ Form::token() }}  
            <div class="form-group">
            
                {{ Form::label('', 'Name') }}
                {{ Form::text('product_name', '', ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('', 'Price') }}
                {{ Form::text('product_price', '', ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('', 'Image') }}
                {!! Form::file('product_image', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {{ Form::label('', 'Description') }}
                {{ Form::textarea('product_description', '', ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
               {{ Form::submit('Save Product', ['class' => 'btn btn-info']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection


