@extends('layouts.master')
@section('content')


    
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Product</label>
                    <input  class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price">
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity of the Product</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Quantity">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection