@extends('layouts.master')
@section('content')


<div class="card card-primary">
<div class="card-header">  
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('product.store')}}" method="post">
                @csrf
                @method("post")
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Product</label>
                    <input name="Name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input name="Price" type="number" class="form-control" id="exampleInputPassword1" placeholder="Price">
                  </div>

                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity of the Product</label>
                    <input name="Quantity" type="number" class="form-control" id="exampleInputEmail1" placeholder="Quantity">
                  </div>
                <!-- /.card-body -->

                <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Category</label>
                        <select name="category_id" type="text" class="form-control">
                        <option >--Select--</option>
                        @foreach ($categories as $category)
                          <option value="{{$category -> id}}">{{$category -> Name}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Brand</label>
                        <select name="brand_id" type="text" class="form-control">
                          <option >--Select--</option>
                        @foreach ($brands as $brand)
                          <option value="{{$brand -> id}}">{{$brand -> Name}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                   

                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Unit</label>
                        <select name="unit_id" type="text" class="form-control">
                        <option >--</option>
                        @foreach ($units as $unit)
                          <option value="{{$unit -> id}}">{{$unit -> Name}}</option>
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