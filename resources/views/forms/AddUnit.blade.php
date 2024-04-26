@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Unit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('unit.store')}}" method="post">

              @csrf
                  @method('post')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Product</label>
                    <input name="Name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>

                  <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label>Status</label>
                        <select name="select" class="form-control">
                          <option>active</option>
                          <option>inactive</option>
                        </select>
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="Description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" >
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
@endsection