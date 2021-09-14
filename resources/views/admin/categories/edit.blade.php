@extends('admin_panel.admin')



@section('content')

<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit category</small></h3>
          </div>
          
           <!-- form start -->
           {!! Form::open([
            'action' => ['App\Http\Controllers\CategoryController@update',$category->id],  
            'method' => 'PUT',
            'class' => 'form'
            ]) !!}  

              {{ Form::token() }}
              {{ Form::hidden('_method', 'PUT') }}   

              <div class="card-body">
                {{ Form::label('', 'Category Name') }}
                {{ Form::text('category_name', $category->category_name, ['class' => 'form-control']) }}
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