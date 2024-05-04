<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function Home()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('frontend.index', compact('products', 'categories'));
    }
    public function LoadProductModel($id)
    {

        $product = Product::with(['productSizes', 'productOptions'])->find($id);

        return view('layouts.popup', compact('product'))->render();
    }
}
