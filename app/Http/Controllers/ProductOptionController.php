<?php

namespace App\Http\Controllers;

use App\Models\ProductOption;
use Illuminate\Http\Request;

class ProductOptionController extends Controller
{
    public function StoreProductOption(Request $request, $id)
    {
        ProductOption::updateOrCreate([
            'product_id' => $id,
            'option' => $request->option,
            'price' => $request->price
        ]);
        toastr()->success('Data has been updated successfully!');
        return redirect()->back();
    }
}
