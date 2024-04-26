@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('brand.update' , ['brands' => $brand])}}" method="post">

              @csrf
                  @method('put')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the Brand</label>
                    <input name="Name" class="form-control" id="name" value = "{{$brand -> Name}}">
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="Description" type="text" class="form-control" value = "{{$brand -> Description}}">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
@endsection