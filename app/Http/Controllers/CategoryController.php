<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $categories = Category::latest()->get();
        return view('admin.Category.AllCategory', compact('categories'));
    }
    public function AddCategory()
    {
        return view('admin.Category.AddCategory');
    }
    public function StoreCategory(Request $request)
    {

        Category::create([
            'name' => $request->name,
            'ShowAtHome' => $request->ShowAtHome,
            'status' => $request->status,
        ]);
        toastr()->success('Category Craeted Successfully');
        return redirect()->route('all.category');
    }
    public function EditCategory($id)
    {
        $category = Category::find($id);
        return view('admin.Category.EditCategory', compact('category'));
    }
    public function UpdateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->ShowAtHome = $request->ShowAtHome;
        $category->status = $request->status;
        $category->save();
        toastr()->success('Category updated Successfully');
        return redirect()->back();
    }
    public function DellCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        toastr()->success('Category deleted Successfully');
        return redirect()->back();
    }
}
