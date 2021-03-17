<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{ 


    public function index()
    {
        $products = Product::all();
        return view('products',compact('products'));
    }
 
    public function create()
    {
        return view('product_create');
    }
 
    public function store(Request $request)
    { 
        $new = new Product;
        $new->name = $request->name;
        $new->brand = $request->brand;
        $new->model = $request->model;
        $new->price = $request->price;
        $new->stock_amount = $request->stock_amount;
        $new->price = $request->price;
        $new->save();
        return redirect('products')->with('success', 'Product has been added'); 
    }
 
    public function edit(Product $product, $id)
    {  
        $product = Product::find($id);
        return view('product_edit', compact('product'));
    }
 
    public function update(Request $request, Product $product)
    {
        $new =  Product::find($request->id);
        $new->name = $request->name;
        $new->brand = $request->brand;
        $new->model = $request->model;
        $new->price = $request->price;
        $new->stock_amount = $request->stock_amount;
        $new->price = $request->price;
        $new->save();
        return redirect('products')->with('success', 'Product has been Updated');
    }

 
    public function destroy(Product $product, $id)
    {
        Product::find($id)->delete();
        return redirect('products')->with('success', 'Product has been Deleted');
    }
}
