@extends('admin_panel.admin')



@section('content')



<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Num.</th>
                  <th>Picture</th>
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Product Price</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>
                        
                        <img src="/storage/products_img/{{ $product->product_image }}" class="profile elevation-2" width="140px">
                      </td>
                      <td>{{ $product->product_name }}</td>
                      <td>{{ $product->category->category_name }}</td>
                      <td>$ {{ number_format($product->product_price / 100, 2)}}</td>
                      <td>
                        @if($product->status == 1)
                          <a href="{{ route('products.deactivate', [$product->id]) }}" class="btn btn-secondary">Deactivate</a>
                        @else
                          <a href="{{ route('products.activate', [$product->id]) }}" class="btn btn-success">Activate</a>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-primary">
                          <i class="nav-icon fas fa-edit"></i>
                        </a>
                       
                        {!! Form::open([ 'route' => ['products.destroy', $product],
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
                  <th>Picture</th>
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Product Price</th>
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