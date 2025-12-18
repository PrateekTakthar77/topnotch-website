@section('title','Update Service')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Edit Service</h6>
        <form action="{{ route('admin.updateService',$service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group py-4 mb-3">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{$service->title}}">
            </div>
            <div class="form-group mb-3">
                <label for="category_type">Category</label>
                <select name="category_type" id="category_type" class="form-control">
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                            {{ $service->category_type == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group mb-3">
                <label for="">Long Description</label>
                <textarea name="long_desc" id="blogs-desc" class="form-control">{{$service->long_description}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Banner Image</label>
                <input type="file" name="banner_image" class="form-control">
                <img src="{{ asset('uploads/service/'.$service->banner_image) }}"  alt="Image">
                        
            </div>
            <div class="form-group py-2">
                <label for="MetaTitle">Meta Title</label>
                <input type="text" id="MetaTitle" name="Meta_Title" class="@error('MetaTitle') is-invalid @enderror form-control" placeholder="Meta Title" value="{{$service->seo_title}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaKeyword">Meta Keyword</label>
                <input type="text" id="MetaKeyword" name="Meta_Keyword" class="@error('MetaKeyword') is-invalid @enderror form-control" placeholder="Meta Keyword" value="{{$service->seo_keywords}}">
            </div>
            <div class="form-group py-2">
                <label for="MetaDescription">Meta Description</label>
                <input type="text" id="MetaDescription" name="Meta_Description" class="@error('MetaDescription') is-invalid @enderror form-control" placeholder="Meta Description" value="{{$service->seo_description}}">
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Service</button>
            </div>


        </form>

    </div>
</div>
@endsection