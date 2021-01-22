<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            return datatables()->of(Product::all())
                    ->make(true);
        }
        return view('product.index');
    }

}
