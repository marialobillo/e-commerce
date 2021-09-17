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
            'url' => '/products', 
            'method' => 'POST',
            'class' => 'form',
            'files' => 'true'
            ]) !!}  
            {{ Form::token() }} 
            
              
              <div class="card-body">
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
                    {{ Form::label('', 'Category') }}
                    {{ Form::select('category_id', $categories, null, 
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

