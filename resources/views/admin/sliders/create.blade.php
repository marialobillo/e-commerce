@extends('admin_panel.admin')



@section('content')

     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Add slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form >
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Slider description 1</label>
                      <input type="text" name="description1" class="form-control" id="exampleInputEmail1" placeholder="Enter slider description">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Slider description 2</label>
                      <input type="text" name="description2" class="form-control" id="exampleInputEmail1" placeholder="Enter slider description">
                    </div>
                    <label for="exampleInputFile">Slider image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <!-- <button type="submit" class="btn btn-warning">Submit</button> -->
                    <input type="submit" class="btn btn-warning" value="Save" >
                  </div>
                </form>


                 <!-- form start -->
                 {!! Form::open([
                  'url' => '/products', 
                  'method' => 'POST',
                  'class' => 'form',
                  'files' => 'true',
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
                          {{ Form::label('', 'Status') }}
                          {!! Form::number('status',null,['class' => 'form-control']) !!}
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
      <!-- /.content -->

@endsection