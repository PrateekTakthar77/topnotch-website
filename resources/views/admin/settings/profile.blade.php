@section('title','Profile Settings')
@extends('admin.main')
@section('content')
<div class="space-y-8">
    <div class="grid grid-cols-1 gap-6">
    @include('admin.message')
        <form id="ProfileSettingsForm" action="{{route('admin.SaveProfile')}}" method="POST" enctype="multipart/form-data">
            <input name="userid" type="hidden" class="hidden" value="{{$user->id}}">
            @csrf
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Profile Settings</div>
                        </div>
                    </header>
                    <div class="card-text h-full">
                        <div class="form-group px-2 py-4">
                            <label for="title" class="block capitalize form-label">
                                {{ __('User ID') }}
                            </label>
                            <input type="text" name="username" class="form-control" placeholder="User Email" value="{{$user->email}}">
                        </div>
                        <div class="form-group px-2 py-2">
                            <label for="title" class="block capitalize form-label">
                                {{ __('New Password') }}
                            </label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"" placeholder="New Password" value="">
                        </div>
                        <div class="form-group px-2 py-2">
                            <label for="title" class="block capitalize form-label">
                                {{ __('Confirm Password') }}
                            </label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" autocomplete value="" required>
                        </div>  
                    </div>
                    <div class="py-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection