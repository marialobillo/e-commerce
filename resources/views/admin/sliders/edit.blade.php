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
                  <h3 class="card-title">Edit slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                   <!-- form start -->
                   {!! Form::open([
                    'url' => '/sliders', 
                    'method' => 'POST',
                    'class' => 'form',
                    'files' => 'true',
                    ]) !!}  
                    {{ Form::token() }} 



                      <div class="card-body">

                        <div class="form-group">
                          {{ Form::label('', 'Description 1') }}
                          {{ Form::text('description1', $slider->description1, ['class' => 'form-control']) }}
                        </div>
        
                        <div class="form-group">
                            {{ Form::label('', 'Description 2') }}
                            {{ Form::text('description2', $slider->description2, ['class' => 'form-control']) }}
                        </div>
        
                        <div class="form-group">
                            {{ Form::label('', 'Image') }}
                            <img src="/storage/sliders_img/{{ $slider->slider_image }}" class="elevation-2" width="140px">
                            {!! Form::file('slider_image', ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                          {{ Form::label('', 'Status') }}
                          {{ Form::select('status', array('1' => 'Activated', '0' => 'Deactivated'), null, 
                          [
                            'class' => 'form-control'
                          ]) }}
                      </div>
        
                      </div>
                   
      
                      <div class="card-footer">
                        {{ Form::submit('Save Slider', ['class' => 'btn btn-info']) }}
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