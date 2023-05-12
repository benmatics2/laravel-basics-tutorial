<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::latest()->paginate(10);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string|unique:products,name',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|integer',
        'user_id' => 'nullable|integer',
        'description' => 'required|string'
        ]);

        $input = $request->all();
        $input['user_id'] = 1;//Auth::user()->id
        $product = Product::create($input);

        return redirect('/products')
        ->with('success','The Product "'. $product->name.'" has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         $request->validate([
        'name' => 'required|string|unique:products,name,'.$product->id,
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|integer',
        'description' => 'required|string'
        ]);
        $input = $request->all();
        $product->update($input);

        return redirect()->route('products.index')
        ->with('success','Product Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Product has been deleted successfully');
    }
}
