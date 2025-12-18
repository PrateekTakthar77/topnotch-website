@section('title','Newsletter Settings')
@extends('admin.main')
@section('content')

<div class="space-y-8">
    <div class="grid grid-cols-1 gap-6">
    @include('admin.message')
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">Newsletters</div>
                        </div>
                    </header>
                    <div class="card-text h-full">
                        <div>
                            <div class="tab-content" id="pills-tabContentHorizontal">
                                <div class="tab-pane fade show active" id="pills-contentHorizontal" role="tabpanel" aria-labelledby="pills-home-tabHorizontal">
                                
                                <div class="card">
                                        <div class="card-body px-6 pb-6">
                                            <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                                <div class="inline-block min-w-full align-middle">
                                                    <div class="overflow-hidden ">
                                                        <table id="data-table-contact" class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                                            <thead class="bg-slate-200 dark:bg-slate-700">
                                                                <tr>
                                                                    <th scope="col" class="table-td ">
                                                                        {{ __('Sl No') }}
                                                                    </th>
                
                                                                    <th scope="col" class="table-td ">
                                                                        {{ __('Email') }}
                                                                    </th>
                                                                    
                                                                    <th scope="col" class="table-td w-20">
                                                                        {{ __('Action') }}
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                                                @forelse ($newsletters as $item)
                                                                <tr>
                                                                    <td class="table-td">
                                                                        <div class="flex items-center">
                                                                           
                                                                            <div class="flex-1 text-center">
                                                                                <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                    # {{ $item->id }}
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table-td">
                                                                        <div class="flex items-center">
                                                                           
                                                                            <div class="flex-1 text-center">
                                                                                <h4 class="text-sm font-medium text-slate-600 whitespace-nowrap">
                                                                                    {{ $item->email }}
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table-td">
                                                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                                                            <a class="action-btn" href="{{ route('admin.deleteContact',$item->id) }}">
                                                                                <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @empty
                                                            
                                                                <tr class="border border-slate-100 dark:border-slate-900 relative">
                                                                    <td class="table-cell text-center" colspan="5">
                                                                        <h2 class="text-xl text-slate-700 mb-8 mt-4">{{ __('No Enquiry found.') }}</h2>
                                                                    </td>
                                                                </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>
</div>

@endsection