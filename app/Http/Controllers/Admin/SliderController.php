<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use FileUploadTrait;
    public function index()
    {
        $sliders = Slider::paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }
    public function CreateSlider()
    {

        return view('admin.slider.createSlider');
    }
    public function StoreSlider(Request $request)
    {
        $imagePath = $this->updateImage($request, 'image');
        $slider = new Slider();

        $slider->offer = $request->offer;
        $slider->image = $imagePath;
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->short_description = $request->short_description;
        $slider->button_link = $request->button_link;
        $slider->status = $request->status;
        $slider->save();
        toastr()->success('Slider  has been created successfully!');
        return redirect()->route('admin.slider');
    }
}
