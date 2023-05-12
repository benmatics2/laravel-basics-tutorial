@extends('layouts.app')

    @section('content')
     <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                <h2>Manage Product Page</h2>
                </div>
                <div class="float-end mb-2">
                <a class="btn btn-outline-success" href="{{ route('products.create') }}"> Create Product</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>S.No</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Qty</th>
                    <th>Product Description</th>
                    <th>Action</th>
                </tr>
                @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ ucfirst($product->name) }}</td>
                    <td> ₦{{number_format($product->price)}}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ Str::limit($product->description,30) }}</td>
                    <td>
                        <table width="100%">
                            <tr>
                                <td><a class="btn btn-sm btn-outline-secondary" href="{{ route('products.show',$product->id) }}">Show</a></td>
                                <td><a class="btn btn-sm btn-outline-primary" href="{{ route('products.edit',$product->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="6">No Products available</td></tr>
                @endforelse
            </table>
        </div>
        {!! $products->links()!!}
    </div>
@endsection
