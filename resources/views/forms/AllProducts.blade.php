@extends('layouts.master')
@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Products</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>

                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Category</th>
                      <th>Brand</th>
                      <th>Units</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  @foreach ($products as $product)
                    <tr>
                      <td>{{$product -> id}}</td>
                      <td>{{$product -> Name}}</td>
                      <td>{{$product -> Price}}</td>
                      <td>{{$product -> Quantity}}</td>
                      <td>{{$product -> category->Name}}</td> 
                      <td>{{$product -> brand->Name}}</td>
                      <td>{{$product -> unit->Name}}</td> 

                      <td > <a href="{{route('product.edit', ['product'=>$product])}}"><input type="button" value="Edit"  ></a>  <form action="{{route('product.delete', ['products'=>$product])}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <input type="submit" value="Delete" >
            </form></td>

                     

                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
 </div>
@endsection