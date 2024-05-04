<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use FileUploadTrait;
    public function AllProducts()
    {
        $products = Product::all();
        return view('admin.Products.AllProduct', compact('products'));
    }
    public function CreateProducts()
    {
        $categories = Category::all();
        return view('admin.Products.CreateProduct', compact('categories'));
    }
    public function StoreProducts(Request $request)
    {


        $imagePath = $this->updateImage($request, 'thum_image');

        Product::create([
            'thum_image' => $imagePath,
            'name' => $request->name,
            'slug' => GenerateUniqueSlug('Product', $request->name),
            'category_id' => $request->category_id,
            'price' => $request->price,
            'offer_price' => $request->offer_price,
            'short_desc' => $request->short_desc,
            'long_desc' => $request->long_desc,
            'sku' => $request->sku,
            'seo_title' => $request->seo_title,
            'seo_desc' => $request->seo_desc,
            'show_at_home' => $request->show_at_home,
            'status' => $request->status,

        ]);
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }
    public function DeleteProducts($id)
    {
        $product = Product::find($id);
        $product->delete();
        toastr()->success('Product deleted successfully!');
        return redirect()->back();
    }
    public function EditProducts($id)
    {

        $categories = Category::all();

        $product = Product::find($id);

        return view('admin.Products.EditProduct', compact('product', 'categories'));
    }
    public function UpdateProducts(Request $request, $id)
    {
        $product = Product::find($id);
        $imagePath = $this->updateImage($request, 'thum_image');
        $product->thum_image = $imagePath;
        $product->name = $request->name;
        $product->slug = GenerateUniqueSlug('Product', $request->name);
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
        $product->sku = $request->sku;
        $product->seo_title = $request->seo_title;
        $product->seo_desc = $request->seo_desc;
        $product->show_at_home = $request->show_at_home;
        $product->status = $request->status;
        $product->save();
        toastr()->success('Data updated successfully!');
        return redirect()->back();
    }
}
