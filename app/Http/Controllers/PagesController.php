<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function shop()
    {
        $products = Product::orderBy('product_name', 'asc')->paginate(2);

        return view('pages.shop', compact('products'));
    }


}
