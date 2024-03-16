<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $products   = Product::orderBy('created_at', 'desc' )->get();
       $theTotalProductValue  = $products->sum('quantity * price');
       return view('', compact('products', 'theTotalProductValue'));
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {

    }
}
