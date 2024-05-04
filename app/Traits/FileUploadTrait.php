<?php


namespace App\Traits;

use Illuminate\Http\Request;


trait FileUploadTrait
{
    function updateImage(Request $request, $inputName, $path = "/upload")
    {

        if ($request->hasFile($inputName)) {
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);
            return $path . '/' . $imageName;
        }
    }
}
