<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // 
    public function index()
    {

        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }


    public function create()
    {

        return view('products.create');
    }


    public function store(Request $request)
    {


        $request->validate([

            'name' => 'required|max:100',
            'description' => 'nullable|min:3',
            'size' => 'required|decimal:0,2|max:100',

        ]);
        Product::create($request->input());
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product) {


        
    }
}
