<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function Index()
    {
        return view('admin.Setting.index');
    }
    public function SettingUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => 'required|max:255',
            'site_currency' => 'required|max:4',
            'site_currency_icon' => 'required|max:4',
            'site_currency_position' => 'required|max:255',
        ]);
        foreach ($validatedData as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
        toastr()->success('Updated Successfully');
        return redirect()->back();
    }
}
