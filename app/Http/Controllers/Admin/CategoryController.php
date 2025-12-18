<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        
        $category = new Category();
        $category->title = $request->input('title');
        $category->slug = Str::slug($request->input('title'), '-');
        $category->short_description = $request->input('short_desc');
        $category->long_description = $request->input('long_desc');
        $category->seo_title = $request->input('Meta_Title');
        $category->seo_keywords = $request->input('Meta_Keyword');
        $category->seo_description = $request->input('Meta_Description');
 
        $category->save();
        return Redirect::route('admin.Settings', 'category-settings')->withSuccess('Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->input('title');
        $category->slug = Str::slug($request->input('title'), '-');
        $category->short_description = $request->input('short_desc');
        $category->long_description = $request->input('long_desc');
        $category->seo_title = $request->input('Meta_Title');
        $category->seo_keywords = $request->input('Meta_Keyword');
        $category->seo_description = $request->input('Meta_Description');


        $category->update();
        return Redirect::route('admin.Settings', 'category-settings')->withSuccess('Category Updated Successfully');
   
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();
        return redirect()->back()->with('status','Category Deleted Successfully');
    }
}
