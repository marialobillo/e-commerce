@extends('layouts.admin')

@section('content')


 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Add product</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product name</label>
                  <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Product price</label>
                  <input type="number" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter product price" min="1">
                </div>
                <div class="form-group">
                  <label>Product category</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Fruit</option>
                    <option>Juice</option>
                    <option>Vegetable</option>
                  </select>
                </div>
                <label for="exampleInputFile">Product image</label>
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
                <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                <input type="submit" class="btn btn-success" value="Save">
              </div>
            </form>
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