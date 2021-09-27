@extends('admin_panel.admin')



@section('content')
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Sliders</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Num.</th>
                      <th>Picture</th>
                      <th>Description one</th>
                      <th>Description Two</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($sliders as $slider)
                    <tr>
                      <td>1</td>
                      <td>
                        <img src="/storage/sliders_img/{{ $slider->slider_image }}" class="profile elevation-2" width="140px">
                      </td>
                      <td>{{ $slider->description1 }}</td>
                      <td>{{ $slider->description2 }}</td>
                      <td>
                        @if($slider->status == 1)
                        <a href="{{ route('sliders.deactivate', [$slider->id]) }}" class="btn btn-secondary">Deactivate</a>
                      @else
                        <a href="{{ route('sliders.activate', [$slider->id]) }}" class="btn btn-success">Activate</a>
                      @endif
                      </td>
                      <td>
                        <a href="#" class="btn btn-warning">Activate</a>
                        <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                        <a href="#" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                      </td>
                    </tr>
                      @endforeach
                   
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Num.</th>
                      <th>Picture</th>
                      <th>Description one</th>
                      <th>Description Two</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->


@endsection