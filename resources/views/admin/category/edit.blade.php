@section('title','Update Category')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Edit Category</h6>
        <form action="{{ route('admin.updateCategory',$category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group py-4 mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{$category->title}}">
            </div>
         {{--   <div class="form-group mb-3">
                <label for="">Short Description</label>
                <input type="text" name="short_desc" class="form-control" value="{{$category->short_description}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Long Description</label>
                <textarea name="long_desc" id="blogs-desc" class="form-control">{{$category->long_description}}</textarea>
            </div> --}}
            <div class="form-group py-2">
                <label for="MetaTitle">Meta Title</label>
                <input type="text" id="MetaTitle" name="Meta_Title" class="@error('MetaTitle') is-invalid @enderror form-control" placeholder="Meta Title" value="{{$category->seo_title}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaKeyword">Meta Keyword</label>
                <input type="text" id="MetaKeyword" name="Meta_Keyword" class="@error('MetaKeyword') is-invalid @enderror form-control" placeholder="Meta Keyword" value="{{$category->seo_keywords}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaDescription">Meta Description</label>
                <input type="text" id="MetaDescription" name="Meta_Description" class="@error('MetaDescription') is-invalid @enderror form-control" placeholder="Meta Description" value="{{$category->seo_description}}">
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Category</button>
            </div>


        </form>

    </div>
</div>
@endsection
