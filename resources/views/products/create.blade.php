@extends('layouts.app')

@section('content')
    <h2>Show Product</h2>
    <div class="card-body">
       <form action="{{ url("/saveproduct") }}" method="POST" class="form">
        @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="product_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="text" name="product_price" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="product_description" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-info">
            </div>

        
        </form>
    </div>
@endsection


