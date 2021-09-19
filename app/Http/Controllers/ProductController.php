<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('category_name', 'id');
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        // $request->validate([
        //     'product_name' => 'required',
        //     'product_price' => 'required',
        //     'category_id' => 'required',
        //     'product_image' => 'image|nullable|max:1999',
        // ]);

        $input = $request->all();

        if($request->hasFile('product_image')){
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();

            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just Extension
            $extension = $request->file('product_image')->getClientOriginalExtension();

            // Filename to store 
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $input['product_image'] = $fileNameToStore;

            // Upload Image
            $path = $request->file('product_image')->storeAs('public/image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
            $input['product_image'] = $fileNameToStore;
        }
        
        // Create the new category
        Product::create($input);

        return redirect()->route('products.index')
            ->with('success', 'Product has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('category_name', 'id');

        return view('admin.products.edit', [
            'product' => $product, 
            'categories' => $categories
        ]);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {

        // $request->validate([
        //     'product_name' => 'required',
        //     'product_price' => 'required',
        //     'category_id' => 'required',
        // ]);

        $input = $request->all();

        if($request->hasFile('product_image')){
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();

            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just Extension
            $extension = $request->file('product_image')->getClientOriginalExtension();

            // Filename to store 
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $input['product_image'] = $fileNameToStore;

            // Upload Image
            $path = $request->file('product_image')->storeAs('public/image', $fileNameToStore);
        } 

        // Update the product with Image
        $product->update($input);
       

        return redirect()->route('products.index')    
            ->with('success', 'Product have been updated successfully');
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

        return redirect('/products')
            ->with('success', 'Product was deleted successfully.');
    }
}
