@extends('layouts.admin')

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
                <tr>
                  <td>1</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                    <a href="#" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                    <a href="#" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a>
                  </td>
                </tr>
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