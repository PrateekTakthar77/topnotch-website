<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use File;
use Illuminate\Support\Facades\Redirect;


class TeamController extends Controller
{
    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        
        $team = new Team();
        $team->name = $request->input('name');
        $team->profession = $request->input('profession');
        // $team->title = $request->input('title');
        $team->seo_title = $request->input('Meta_Title');
        $team->seo_keywords = $request->input('Meta_Keyword');
        $team->seo_description = $request->input('Meta_Description');
 
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/team/', $filename);
            $team->image = $filename;
        }
        $team->save();
        return Redirect::route('admin.Settings', 'team-settings')->withSuccess('Member Added Successfully');
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {

        $team = team::find($id);
        $team->name = $request->input('name');
        // $team->title = $request->input('title');
        $team->profession = $request->input('profession');
        $team->seo_title = $request->input('Meta_Title');
        $team->seo_keywords = $request->input('Meta_Keyword');
        $team->seo_description = $request->input('Meta_Description');

        if($request->hasfile('picture'))
        {
            $destination = 'uploads/team/'.$team->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/team/', $filename);
            $team->image = $filename;
        }

        $team->update();
        return Redirect::route('admin.Settings', 'team-settings')->withSuccess('Member Updated Successfully');
   
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        $destination = 'uploads/businessvertical/'.$team->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $team->delete();
        return redirect()->back()->with('status','Member Deleted Successfully');
    }
}
