<?php

namespace App\Http\Controllers;

use App\Models\ProductGallery;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    use FileUploadTrait;
    public function Index($id)
    {

        return view('admin.Products.gallery.index', compact('id'));
    }
    public function Store(Request $request, $id)
    {
        $gallery = new ProductGallery();
        $gallery->product_id = $id;

        $imagePath = $this->updateImage($request, 'image');

        $gallery->image = $imagePath;
        $gallery->save();
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }
}
