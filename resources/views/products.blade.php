@extends('layouts.app')

@section('content')

    <div class="container-fluid">
            <div class="row bg-white p-4">
              <div class="row">
                 <h1 class="my-4 text-center">All Products</h1>
                 @foreach ($products as $product)
               <div class="col-3">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">New Arrival</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                    <li><strong>Name: </strong> {{$product->name}}</li>
                    <li> <strong>Price: </strong>  ${{$product->price}}</li>
                    <li><strong>Quantity: </strong> {{$product->quantity}}</li>
                    <li><strong>Description: </strong> {{$product->description}}</li>
                    </ul>
                    <button type="button" class="w-50 btn btn-sm btn-primary">Add to Cart</button>
                </div>
                </div>
               </div>
              @endforeach
            </div>
         </div>
    </div>

@endsection


