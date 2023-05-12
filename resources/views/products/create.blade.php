@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
             <div class="float-end">
            <a class="btn btn-outline-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="border rounded col-xs-12 col-sm-10 col-md-6 mx-auto py-4">
                <h3>Create a New Product</h3>
                    <p>Fill and submit this form to create a product</p>
                    <hr>

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mx-auto my-1">
                    <div class="form-group">
                    <label for="title"> <strong>Product Name </strong></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Product Name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-12 mx-auto my-1">
                    <div class="form-group">
                    <label for="title"> <strong>Product Price </strong></label>
                    <input type="text" name="price" class="form-control" value="{{ old('price') }}" placeholder="Product Price">
                    @error('price')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-12 mx-auto mx-1">
                    <div class="form-group">
                    <label for="title"> <strong>Product Quantity </strong></label>
                    <input type="text" name="quantity"  class="form-control" value="{{ old('quantity') }}" placeholder="Product Quantity">
                    @error('quantity')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <div class="col-12 mx-auto my-1">
                    <div class="form-group">
                    <label for="title"> <strong>Product Description </strong></label>
                    <textarea name="description"  class="form-control" rows="8"  placeholder="Product Description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary mt-2">Submit</button>
                </div>
            </form>
            </div>
        </div>

    </div>
@endsection
