<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    public function Index($id)
    {
        $product = Product::find($id);
        return view('admin.Products.ProductSize.ProductSize_index', compact('product'));
    }
    public function StoreProductSize(Request $request, $id)
    {
        ProductSize::updateOrCreate([
            'product_id' => $id,
            'size' => $request->size,
            'prize' => $request->price
        ]);
        toastr()->success('Data has been updated successfully!');
        return redirect()->back();
    }
}
