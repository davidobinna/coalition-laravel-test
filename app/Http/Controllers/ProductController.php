<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $products   = Product::orderBy('created_at', 'desc' )->get();
       $theTotalProductValue  = $products->sum('quantity  *  price');
       return view('products.index', compact('products', 'theTotalProductValue'));
    }

    public function store(Request $request)
    {
           $product = new Product();
           $product->name     = $request->name;
           $product->quantity = $request->quantity;

           $product->price = $request->price;
           $product->save();

           return response()->json($product);


    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;

         $product->quantity = $request->quantity;
        $product->price = $request->price;
        
        $product->save();

        return response()->json($product);
    }
}
