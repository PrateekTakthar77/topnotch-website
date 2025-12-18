@section('title','General Settings')
@extends('admin.main')
@section('content')

<div class="space-y-8">
    <div class="grid grid-cols-1 gap-6">
    @include('admin.message')
        <form id="GeneralSettingsForm" action="{{route('admin.SaveSettings','general-settings')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="general_Settings" name="Settings_Type">
            <div class="card">
                <div class="card-body flex flex-col p-6">
                    <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                        <div class="flex-1">
                            <div class="card-title text-slate-900 dark:text-white">General Settings</div>
                        </div>
                    </header>
                    <div class="card-text h-full">
                        <div>
                            <ul class="nav nav-pills flex items-center flex-wrap list-none pl-0 mb-6 space-x-4 " id="pills-tabHorizontal" role="tablist">
                            
                            </ul>
                            <div class="tab-content" id="pills-tabContentHorizontal">
                                
                                
                                <div class="tab-pane fade show active" id="pills-generalHorizontal" role="tabpanel" aria-labelledby="pills-profile-tabHorizontal">
                                    <div class="form-group py-2">
                                        <label for="ContactOne">Contact Number One</label>
                                        <input type="text" id="ContactOne" name="Contact_One" class="@error('ContactOne') is-invalid @enderror form-control" placeholder="Contact One" value="{{Get_Meta_Tag_Value('General_Settings','Contact_One')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="ContactTwo">Contact Number Two</label>
                                        <input type="text" id="ContactTwo" name="Contact_Two" class="@error('ContactTwo') is-invalid @enderror form-control" placeholder="Contact Two" value="{{Get_Meta_Tag_Value('General_Settings','Contact_Two')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="EmailOne">Company Email One</label>
                                        <input type="text" id="EmailOne" name="Email_One" class="@error('EmailOne') is-invalid @enderror form-control" placeholder="Email One" value="{{Get_Meta_Tag_Value('General_Settings','Email_One')}}">
                                    </div>
                                    {{-- <div class="form-group py-2">
                                        <label for="EmailTwo">Company Email Two</label>
                                        <input type="text" id="EmailTwo" name="Email_Two" class="@error('EmailTwo') is-invalid @enderror form-control" placeholder="Email Two" value="{{Get_Meta_Tag_Value('General_Settings','Email_Two')}}">
                                    </div> --}}
                                    <div class="form-group py-2">
                                        <label for="Address">Address</label>
                                        <input type="text" id="corp_Address" name="corp_address" class="@error('Address') is-invalid @enderror form-control" placeholder="Address" value="{{Get_Meta_Tag_Value('General_Settings','corp_address')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="Address">Address</label>
                                        <input type="text" id="resd_Address" name="resd_address" class="@error('Address') is-invalid @enderror form-control" placeholder="Address" value="{{Get_Meta_Tag_Value('General_Settings','resd_Address')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="Insta">Map Url</label>
                                        <input type="text" id="Map_url" name="Map_url" class="@error('Map_url') is-invalid @enderror form-control" placeholder="Map Url" value="{{Get_Meta_Tag_Value('General_Settings','Map_url')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="Insta">Insta Url</label>
                                        <input type="text" id="Insta" name="Insta" class="@error('Insta') is-invalid @enderror form-control" placeholder="Insta Url" value="{{Get_Meta_Tag_Value('General_Settings','Insta')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="Facebook">Facebook Url</label>
                                        <input type="text" id="Facebook" name="Facebook" class="@error('Facebook') is-invalid @enderror form-control" placeholder="Facebook Url" value="{{Get_Meta_Tag_Value('General_Settings','facebook')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="Linkedin">Linkedin Url</label>
                                        <input type="text" id="Linkedin" name="Linkedin" class="@error('Linkedin') is-invalid @enderror form-control" placeholder="Linkedin Url" value="{{Get_Meta_Tag_Value('General_Settings','Linkedin')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="Twitter">Twitter Url</label>
                                        <input type="text" id="Twitter" name="Twitter" class="@error('Twitter') is-invalid @enderror form-control" placeholder="Twitter Url" value="{{Get_Meta_Tag_Value('General_Settings','Twitter')}}">
                                    </div>
                                    <div class="form-group py-2">
                                        <label for="Twitter">Youtube Url</label>
                                        <input type="text" id="Youtube" name="Youtube" class="@error('Youtube') is-invalid @enderror form-control" placeholder="Youtube Url" value="{{Get_Meta_Tag_Value('General_Settings','Youtube')}}">
                                    </div>
				    <div class="form-group py-2">
                                        <label for="Copyright">Copyright Name</label>
                                        <input type="text" id="Copyright" name="Copyright_Name" class="@error('Copyright') is-invalid @enderror form-control" placeholder="Copyright Name" value="{{Get_Meta_Tag_Value('General_Settings','Copyright_Name')}}">
                                    </div>
                                    <div class="py-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
