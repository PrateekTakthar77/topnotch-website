<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rule;
use File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class RuleController extends Controller
{
    public function index()
    {
        $rules = Rule::with('category')->get();
        return view('admin.rule.index', compact('rules'));
    }

    public function create()
    {   
        return view('admin.rule.create');
    }

    public function store(Request $request)
    {
        
        $rule = new Rule;
        $rule->title = $request->input('title');
        $rule->long_description = $request->input('long_desc');
        $rule->seo_title = $request->input('Meta_Title');
        $rule->seo_keywords = $request->input('Meta_Keyword');
        $rule->seo_description = $request->input('Meta_Description');
 
        if($request->hasfile('banner_image'))
        {
            $file = $request->file('banner_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/rule/', $filename);
            $rule->banner_image = $filename;
        }
        $rule->save();
        return Redirect::route('admin.Settings', 'rule-settings')->withSuccess('Rules Added Successfully');
    }

    public function edit($id)
    {
        $rule = Rule::find($id);
        return view('admin.rule.edit', compact('rule'));
    }

    public function update(Request $request, $id)
    {
        $rule = Rule::find($id);
        $rule->title = $request->input('title');
        $rule->long_description = $request->input('long_desc');
        $rule->seo_title = $request->input('Meta_Title');
        $rule->seo_keywords = $request->input('Meta_Keyword');
        $rule->seo_description = $request->input('Meta_Description');

        if($request->hasfile('banner_image'))
        {
            $destination = 'uploads/rule/'.$rule->banner_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/rule/', $filename);
            $rule->banner_image = $filename;
        }

        $rule->update();
        return Redirect::route('admin.Settings', 'rule-settings')->withSuccess('Rules Updated Successfully');
   
    }

    public function destroy($id)
    {
        $rule = Rule::find($id);
        $destination = 'uploads/rule/'.$rule->banner_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $rule->delete();
        return redirect()->back()->with('status','Rules Deleted Successfully');
    }
}
