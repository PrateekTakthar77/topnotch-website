<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {   
        return view('admin.project.create');
    }

    public function store(Request $request)
    {
        
        $project = new Project;
        $project->title = $request->input('title');
        $project->slug = Str::slug($request->input('title'), '-');
        $project->sub_title = $request->input('sub_title');
        $project->seo_title = $request->input('Meta_Title');
        $project->seo_keywords = $request->input('Meta_Keyword');
        $project->seo_description = $request->input('Meta_Description');
 
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/project/', $filename);
            $project->image = $filename;
        }
        $project->save();
        return Redirect::route('admin.Settings', 'project-settings')->withSuccess('Project Added Successfully');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->input('title');
        $project->slug = Str::slug($request->input('title'), '-');
        $project->sub_title = $request->input('sub_title');
        $project->seo_title = $request->input('Meta_Title');
        $project->seo_keywords = $request->input('Meta_Keyword');
        $project->seo_description = $request->input('Meta_Description');

        if($request->hasfile('image'))
        {
            $destination = 'uploads/project/'.$project->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/project/', $filename);
            $project->image = $filename;
        }

        $project->update();
        return Redirect::route('admin.Settings', 'project-settings')->withSuccess('Project Updated Successfully');
   
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $destination = 'uploads/project/'.$project->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $project->delete();
        return redirect()->back()->with('status','Project Deleted Successfully');
    }
}