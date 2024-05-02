@extends('layouts.master')
@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Vendors</h3>

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
                      <th>Company</th>
                      <th>Email</th>
                      <th>Number</th>
                      <th>Product Name</th>
                      <th>Company Adddress</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  @foreach ($vendors as $vendor)
                    <tr>
                      <td>{{$vendor -> id}}</td>
                      <td>{{$vendor -> CompanyName}}</td>
                      <td>{{$vendor -> Email}}</td>
                      <td>{{$vendor -> Number}}</td>
                      <td>{{$vendor -> product_id}}</td>
                      <td>{{$vendor -> address_id}}</td>

                      <td > <a href="{{route('vendor.edit', ['vendor'=>$vendor])}}"><input type="button" value="Edit"  ></a>  <form action="{{route('vendor.delete', ['vendors'=>$vendor])}}" method="post" class="d-inline">
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