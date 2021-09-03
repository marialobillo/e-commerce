<?php

namespace App\Http\Controllers;

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
}
