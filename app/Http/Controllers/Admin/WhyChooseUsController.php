<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionTitle;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    public function WhyChooseUs()
    {
        $key = ['why_choose_top_title', 'why_choose_main_title', 'why_choose_sub_title'];
        $titles = SectionTitle::whereIn('key', $key)->pluck('value', 'key');
        $whyChooseUs = WhyChooseUs::all();

        return view('admin.WhyChooseUs.index', compact('titles', 'whyChooseUs'));
    }
    public function updateTitle(Request $request)
    {

        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_top_title'],
            ['value' => $request->why_choose_top_title]
        );
        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_main_title'],
            ['value' => $request->why_choose_main_title]
        );
        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_sub_title'],
            ['value' => $request->why_choose_sub_title]
        );
        toastr()->success('Data Updated Successfully');
        return redirect()->back();
    }
    public function CreateWhyChooseUsTitle()
    {
        return view('admin.WhyChooseUs.CreateTtile');
    }
    public function StoreWhyChooseUsTitle(Request $request)
    {
        WhyChooseUs::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'short_desc' => $request->short_description,
            'status' => $request->status,
        ]);
        toastr()->success('Data Created Successfully');
        return to_route('admin.whyChooseUs');
    }
    public function EditWhyChooseUsTitle($id)
    {
        $Editdata = WhyChooseUs::find($id);
        return view('admin.WhyChooseUs.Edit', compact('Editdata'));
    }
    public function UpdateWhyChooseUsTitle(Request $request, $id)
    {
        $whyChooseUs = WhyChooseUs::find($id);
        $whyChooseUs->icon = $request->icon;
        $whyChooseUs->title = $request->title;
        $whyChooseUs->short_desc = $request->short_description;
        $whyChooseUs->status = $request->status;
        $whyChooseUs->save();
        toastr()->success('Data Updated Successfully');
        return redirect()->back();
    }
    public function DelWhyChooseUsTitle($id)
    {
        $whyChooseUs = WhyChooseUs::find($id);
        $whyChooseUs->delete();
        toastr()->success('Data Deleted Successfully');
        return redirect()->back();
    }
}
