@extends('layouts.master')
@section('content')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Addresses</h3>

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
                      <th>Address</th>
                      <th>State</th>
                      <th>City</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  @foreach ($addresses as $address)
                    <tr>
                      <td>{{$address -> id}}</td>
                      <td>{{$address -> Address}}</td>
                      <td>{{$address -> State}}</td>
                      <td>{{$address -> City}}</td>

                      <td > <a href="{{route('address.edit', ['address'=>$address])}}"><input type="button" value="Edit"  ></a>  <form action="{{route('address.delete', ['addresses'=>$address])}}" method="post" class="d-inline">
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