@section('title','Admin')
@extends('admin.main')
@section('content')
<div>
    <div class=" mb-6">
        <div class="flex items-center justify-between">
        <h5 class="text-textColor font-Inter font-medium md:text-2xl mr-4 dark:text-white mb-1 sm:mb-0">
            Dashboard
        </h5>
        <ul class="m-0 p-0 list-none">
            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter">
                <a href="{{ route('admin.dashboard')}}" class="breadcrumbList">
                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                </a>
            </li>
            <li class="inline-block">
                <a href="/" class="breadcrumbList breadcrumbActive dark:text-slate-300">
                Home
                </a>
            </li>
        </ul>
        </div>
    </div>
</div>
@endsection