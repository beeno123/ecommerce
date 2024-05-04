<?php

namespace App\Http\Controllers;

use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    use FileUploadTrait;
    public function AdminDshboard()
    {
        return view('admin.index');
    }
    public function AdminProfile()
    {
        return view('admin.AdminProfile.ViewProfile');
    }
    public function AdminProfileUpdate(Request $request)
    {
        $user = Auth::user();
        $imagePath = $this->updateImage($request, 'avatar');
        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar = isset($imagePath) ? $imagePath : $user->avatar;
        $user->save();
        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }
}
