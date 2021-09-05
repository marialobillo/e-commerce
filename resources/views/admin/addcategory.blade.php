@extends('layouts.admin')

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
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category name</label>
                  <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                <input type="submit" class="btn btn-primary" value="Save" >
              </div>
            </form>

            {!! Form::open([
              'url' => '/categories', 
              'method' => 'POST',
              'class' => 'form',
              'files' => 'true'
              ]) !!}  
              {{ Form::token() }}

            {{!! Form::close() }}
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