@extends('admin_panel.admin')



@section('content')

 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Ordes</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Client Names</th>
                  <th>Orders</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>2020</td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-eye"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>2020</td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>
                    <a href="#" class="btn btn-primary"><i class="nav-icon fas fa-eye"></i></a>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Client Names</th>
                  <th>Orders</th>
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

@endsection