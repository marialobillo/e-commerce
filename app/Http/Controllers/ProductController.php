<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    

    public function products()
    {
        return view('admin.products');
    }

    public function addProduct()
    {
        return view('admin.addproduct');
    }
}
