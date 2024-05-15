@extends('layouts.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<!-- <div class="card-header"> -->
<h3 class="card-title">Create A Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form  action="{{route('category.update' , ['categories' => $category])}}" method="post">

              @csrf
                  @method('put')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the category</label>
                    <input name="Name" class="form-control" id="name" value = "{{$category -> Name}}">
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="Description" type="text" class="form-control" value = "{{$category -> Description}}">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary swalaDefaultSuccess">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
@endsection