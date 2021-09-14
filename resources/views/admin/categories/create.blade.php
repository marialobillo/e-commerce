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
              <h3 class="card-title">Add category</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            {!! Form::open([
              'url' => '/categories', 
              'method' => 'POST',
              'class' => 'form'
              ]) !!}  

                {{ Form::token() }}  

                <div class="card-body">
                  {{ Form::label('', 'Category Name') }}
                  {{ Form::text('category_name', '', ['class' => 'form-control', 'placeholder' => 'Enter Category']) }}
                </div>

                <div class="card-footer">
                  {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
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