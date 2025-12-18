<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Logo;
use File;
use Illuminate\Support\Facades\Redirect;

class LogosController extends Controller
{
    public function create()
    {
        return view('admin.logo.create');
    }

    public function store(Request $request)
    {
        
        $logo = new Logo();
        $logo->name = $request->input('name');
        $logo->seo_title = $request->input('Meta_Title');
        $logo->seo_keywords = $request->input('Meta_Keyword');
        $logo->seo_description = $request->input('Meta_Description');
        
 
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/logo/', $filename);
            $logo->image = $filename;
        }
        $logo->save();
        return Redirect::route('admin.Settings', 'logo-settings')->withSuccess('Member Added Successfully');
    }

    public function edit($id)
    {
        $logo = Team::find($id);
        return view('admin.logo.edit', compact('logo'));
    }

    public function update(Request $request, $id)
    {

        $logo = logo::find($id);
        $logo->name = $request->input('name');
        $logo->seo_title = $request->input('Meta_Title');
        $logo->seo_keywords = $request->input('Meta_Keyword');
        $logo->seo_description = $request->input('Meta_Description');

        if($request->hasfile('picture'))
        {
            $destination = 'uploads/logo/'.$logo->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/logo/', $filename);
            $logo->image = $filename;
        }

        $logo->update();
        return Redirect::route('admin.Settings', 'logo-settings')->withSuccess('Logo Updated Successfully');
   
    }

    public function destroy($id)
    {
        $logo = Logo::find($id);
        $destination = 'uploads/businessvertical/'.$logo->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $logo->delete();
        return redirect()->back()->with('status','Logo Deleted Successfully');
    }
}
