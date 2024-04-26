@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Address</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('address.store')}}" method="post">

              @csrf
                  @method('post')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Address</label>
                    <input name="Address" class="form-control" id="exampleInputEmail1" placeholder="Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input name="State" type="text" class="form-control" id="exampleInputPassword1" placeholder="State" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input name="City" type="text" class="form-control" id="exampleInputPassword1" placeholder="City" >
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
@endsection