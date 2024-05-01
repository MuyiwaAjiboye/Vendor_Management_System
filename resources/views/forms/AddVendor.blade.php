@extends('layouts.master')
@section('content')


    
<!-- <div class="card-header"> -->
<h3 class="card-title">Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Vendor</label>
                    <input name="CompanyName" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input name="Email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input name="Number" type="number" class="form-control" id="exampleInputEmail1" placeholder="Number">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter a Password">
                  </div>
                <!-- /.card-body -->

              

                <div class="col-sm-2">
                      <!-- select -->
                    <!-- Still need to add product drop down -->
                      <div class="form-group">
                        <label>Select Product</label>
                        <select name="product_id" type="text" class="form-control">
                        @foreach ($brands as $brand)
                          <option>{{$brand -> Name}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Address</label>
                        <select name="address_id" type="text" class="form-control">
                        @foreach ($addresses as $address)
                          <option>{{$address -> Address}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                   

                    

                    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
            <!-- /.card -->


@endsection