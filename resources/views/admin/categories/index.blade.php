@extends('admin_panel.admin')



@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Num.</th>
                  <th>Category Name</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category) 
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', [$category]) }}" class="btn btn-primary">
                        <i class="nav-icon fas fa-edit"></i>
                      </a>
                    
                      {!! Form::open([ 'route' => ['categories.destroy', $category->id],
                      'method' => 'DELETE', 'class' => 'float-right'
                        ]) !!}
                          {{ Form::token() }} 
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach 
                  </tbody>
                <tfoot>
                <tr>
                  <th>Num.</th>
                  <th>Category Name</th>
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