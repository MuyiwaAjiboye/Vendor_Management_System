@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Address</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('address.update' , ['addresses' => $address])}}" method="post">

              @csrf
                  @method('put')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Address</label>
                    <input name="Address" class="form-control" id="name" value = "{{$address -> Address}}">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input name="State" type="text" class="form-control" value = "{{$address -> State}}">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input name="City" type="text" class="form-control" value = "{{$address -> City}}">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
@endsection