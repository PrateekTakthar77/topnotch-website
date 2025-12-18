<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('category')->get();
        $categories= Category::all();
        return view('admin.service.index', compact('services','categories'));
    }

    public function create()
    {   
        $categories= Category::all();
        // dump($categories);
        return view('admin.service.create',compact('categories'));
    }

    public function store(Request $request)
    {
        
        $service = new Service;
        $service->title = $request->input('title');
        $service->slug = Str::slug($request->input('title'), '-');
        $service->category_type= $request->input('category_type');
        $service->long_description = $request->input('long_desc');
        $service->seo_title = $request->input('Meta_Title');
        $service->seo_keywords = $request->input('Meta_Keyword');
        $service->seo_description = $request->input('Meta_Description');
 
        if($request->hasfile('banner_image'))
        {
            $file = $request->file('banner_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/service/', $filename);
            $service->banner_image = $filename;
        }
        $service->save();
        return Redirect::route('admin.Settings', 'service-settings')->withSuccess('Service Added Successfully');
    }

    public function edit($id)
    {
        $service = Service::with('category')->find($id);
        $categories= Category::all();
        return view('admin.service.edit', compact('service','categories'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->input('title');
        $service->slug = Str::slug($request->input('title'), '-');
        $service->category_type = $request->input('category_type');
        $service->long_description = $request->input('long_desc');
        $service->seo_title = $request->input('Meta_Title');
        $service->seo_keywords = $request->input('Meta_Keyword');
        $service->seo_description = $request->input('Meta_Description');

        if($request->hasfile('banner_image'))
        {
            $destination = 'uploads/service/'.$service->banner_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/service/', $filename);
            $service->banner_image = $filename;
        }

        $service->update();
        return Redirect::route('admin.Settings', 'service-settings')->withSuccess('Service Updated Successfully');
   
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $destination = 'uploads/service/'.$service->banner_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $service->delete();
        return redirect()->back()->with('status','Service Deleted Successfully');
    }
}

