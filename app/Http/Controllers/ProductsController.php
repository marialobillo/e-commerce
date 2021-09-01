<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->to('/products')
            ->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));        
    }

    public function update(Request $request){
        
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
        ]);

        $product = Product::find($request->id);
        $product->update($request->all());

        return redirect()->to('/products')    
            ->with('success', 'Product have been updated successfully');
    }
}
