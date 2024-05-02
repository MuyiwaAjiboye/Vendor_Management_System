@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Edit Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('vendor.update' , ['vendors' => $vendor])}}" method="post">

              @csrf
                  @method('put')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Vendor</label>
                    <input name="CompanyName" class="form-control" id="name" value = "{{$vendor -> CompanyName}}">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input name="Email" type="email" class="form-control" value = "{{$vendor -> Email}}">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input name="Number" type="integer" class="form-control" value = "{{$vendor -> Number}}">
                  </div>

                  <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Product</label>
                        <select name="address_id" type="text" class="form-control">
                        <option>{{$vendor -> product_id}}</option>
                        @foreach ($products as $product)
                        
                          <option>{{$product -> Name}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                  <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Address</label>
                        <select name="address_id" type="text" class="form-control">
                        <option>{{$vendor -> address_id}}</option>
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

</div>
@endsection