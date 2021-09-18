@extends('admin_panel.admin')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Product</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          {!! Form::open([
            'action' => ['App\Http\Controllers\ProductController@update',$product->id], 
            'method' => 'PUT',
            'class' => 'form',
            'files' => 'true'
            ]) !!}  
             {{ Form::token() }} 
             {{ Form::hidden('_method', 'PUT') }} 
            
              
              <div class="card-body">
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
                    <img src="/storage/image/{{ $product->product_image }}" class="elevation-2" width="140px">
                    {!! Form::file('product_image', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {{ Form::label('', 'Status') }}
                    {!! Form::number('status', $product->status, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {{ Form::label('', 'Category') }}
                    {{ Form::select('category_id', $categories, $product->category_id, 
                      [
                        'class' => 'form-control', 
                        'placeholder' => 'Select Category'
                      ]) }}
                </div>
                
              </div>
             

              <div class="card-footer">
                {{ Form::submit('Save Product', ['class' => 'btn btn-info']) }}
              </div>
          {!! Form::close() !!}

         
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
 
    
   

     
  
@endsection

