@extends('layouts.master')
@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <h3 class="card-title">All Products</h3>

                <div class="card-tools">
                  <div id="example2" class="input-group input-group-sm" style="width: 100%;">

                  
                    <a href="{{route('product.create')}}"><input type="button" value="Add Product" class="btn btn-primary mr-1" ></a> 
                    

                    <input type="text" name="table_search" class="form-control " placeholder="Search">

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
                    
                  @foreach ($products as $key =>$product)
                    <tr>
                      <td>{{$key+1}}</td> 
                      <td>{{$product -> Name}}</td>
                      <td>{{$product -> Price}}</td>
                      <td>{{$product -> Quantity}}</td>
                      <td>{{ucfirst(strtolower($product -> category->Name))}}</td> 
                      <td>{{ucfirst(strtolower($product -> brand->Name))}}</td>
                      <td>{{ucfirst(strtolower($product -> unit->Name))}}</td> 

                      <td > <a href="{{route('product.edit', $product->id)}}"><input type="button" value="Edit" class="btn btn-primary" ></a>  <form action="{{route('product.delete', ['products'=>$product])}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <input type="submit" class="btn btn-danger swaldDefaultSuccess deletePopup" value="Delete" >
            </form>
          
            <a href="{{ route('product.details', ['product' => $product]) }}" class="btn btn-info ">View</a>

          </td>

                     

                    </tr>
                  @endforeach
                  </tbody>
                </table>
          </div>
        </div>
              <!-- /.card-body -->
      </div>
            <!-- /.card -->
    </div>
 </div>
</section>
@endsection