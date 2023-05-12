@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-6 mx-auto my-3">

<h2>Showing Product Details</h2>

<a class="btn btn-outline-primary float-end" href="{{ route('products.index') }}"> Back</a>
</div>
</div>
    <div class="row">
        <div class="col-sm-6 mx-auto">
        <ol class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Product Name</div>
            {{$product->name}}
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Product Price</div>
            ₦{{number_format($product->price)}}
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Product Quantity</div>
            {{$product->quantity}}
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Product Description</div>
            {{$product->description}}
            </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold">Date uploaded</div>
            {{$product->created_at->diffForHumans()}} by <strong>{{$product->user()->name}}</strong>
            </div>
        </li>
        </ol>
        </div>
    </div>
</div>
@endsection
