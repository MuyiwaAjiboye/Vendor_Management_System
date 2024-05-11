@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Edit Product</h3>
</div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('product.update' , ['products' => $Product  ])}}" method="post">

              @csrf
                @method('put')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of Product</label>
                    <input name="Name" class="form-control" id="name" value = "{{$Product -> Name}}">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input name="Price" type="text" class="form-control" value = "{{$Product -> Price}}">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input name="Quantity" type="text" class="form-control" value = "{{$Product -> Quantity}}">
                  </div>

                  <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Category</label>
                        <select name="category_id" type="text" class="form-control">
                        <option >{{$Product -> category->Name}}</option>
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
                          <option >{{$Product -> brand->Name}}</option>
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
                        <option >{{$Product -> unit->Name}}</option>
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

</div>
@endsection