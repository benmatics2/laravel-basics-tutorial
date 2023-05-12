@extends('layouts.app')

@section('content')
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="float-end">
                    <a class="btn btn-outline-primary" href="{{ route('products.index') }}" enctype="multipart/form-data"> Back</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="border rounded col-xs-12 col-sm-10 col-md-6 mx-auto py-4">
                <h3>Edit Product</h3>
                    <p>Make changes and save the product</p>
                    <hr>
                <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-12 mx-auto my-1">
                        <div class="form-group">
                        <strong>Product Name:</strong>
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Product name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-12 mx-auto my-1">
                        <div class="form-group">
                        <strong>Product Price:</strong>
                        <input type="text" name="price" class="form-control" placeholder="Product Price" value="{{ $product->price}}">
                        @error('price')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-12 mx-auto my-1">
                        <div class="form-group">
                        <strong>Product quantity:</strong>
                        <input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control" placeholder="Product Quantity">
                        @error('quantity')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-12 mx-auto my-1">
                        <div class="form-group">
                        <strong>Product Description:</strong>
                        <textarea name="description"  class="form-control" rows="10" placeholder="Product Description">{{ $product->description }}</textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-primary mt-2">Save</button>
                    </div>
                </form>
                </div>
            </div>

        </div>
@endsection
