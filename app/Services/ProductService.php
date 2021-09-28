<?php 

namespace App\Services; 

use App\Http\Requests\ProductRequest;

class ProductService {

    public function setupProductImage(ProductRequest $request) 
    {

        // if($request->hasFile('product_image'))
        // {
        //     $filenameWithExt = $request->file('product_image')->getClientOriginalName();

        //     // Get Filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //     // Get just Extension
        //     $extension = $request->file('product_image')->getClientOriginalExtension();

        //     // Filename to store 
        //     $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        //     $input['product_image'] = $fileNameToStore;

        //     // Upload Image
        //     $path = $request->file('product_image')->storeAs('public/image', $fileNameToStore);
        // } 

        // return $request;

    }
}