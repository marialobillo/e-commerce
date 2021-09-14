<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function categories()
    {
        return view('admin.categories');
    }

    
    public function addCategory()
    {
        return view('admin.addcategory');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();

        // return view('pages.shop')->with('products', $products);
        return view('admin.categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addcategory');
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
            'category_name' => 'required',
        ]);

        $input = $request->all();
        
        // Create the new product
        Category::create($input);

        return redirect()->to('/categories')
            ->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'product_image' => 'image|nullable|max:1999',
        ]);

        $product = Product::findOrFail($id);
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
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')
            ->with('success', 'Product was deleted successfully.');
    }
}
