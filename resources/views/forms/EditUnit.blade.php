@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Unit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('unit.update' , ['units' => $unit])}}" method="post">

              @csrf
                  @method('put')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Product</label>
                    <input name="Name" class="form-control" id="name" value = "{{$unit -> Name}}">
                  </div>

                  <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Status</label>
                        <select value = "{{$unit -> status}}" name="select" class="form-control">
                          <option >active</option>
                          <option>inactive</option>
                        </select>
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="Description" type="text" class="form-control" value = "{{$unit -> Description}}">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary swalaDefaultSuccess">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
@endsection