<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function AddToCart(Request $request)
    {
        try {
            $product = Product::with(['productSizes'])->find($request->product_id);
            $productSize = $product->productSizes->whereIn('id', $request->productSize)->first();

            $options = [
                'product_size' => [],
                'product_info' => [
                    'image' => $product->thum_image,
                    'slug' => $product->slug,
                ]
            ];
            if ($productSize !== null) {
                $options['product_size'][] = [














































































































































































































                    'id' => $productSize?->id,
                    'size' => $productSize?->size,
                    'prize' => $productSize?->prize
                ];
            }
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $request->quantity,
                'price' => $product->offer_price > 0 ? $product->offer_price : $product->price,
                'weight' => 0,
                'options' => $options

            ]);
            return response(['status' => 'success', 'message' => 'product added into cart'], 200);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'product not added somethong wrong'], 500);
        }
    }
}
