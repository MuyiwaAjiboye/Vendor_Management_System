

@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <p><strong>Name:</strong> {{$product->Name}}</p>
                            <p><strong>Brand:</strong> {{$product->brand->Name}}</p>
                            <p><strong>Category:</strong> {{$product->category->Name}}</p>
                            <p><strong>Price:</strong> <i class="fa-solid fa-naira-sign"></i>{{$product->Price}}</p>
                            <p><strong>Quantity Ordered:</strong> {{$product->Quantity}}  {{$product->unit->Name }}</p>


                           
                            <p><strong>Total:</strong> <i class="fa-solid fa-naira-sign"></i>{{ $product->Price * $product->Quantity }}</p>
                          

                          
                            
                            <a href="{{ route('product.index')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection