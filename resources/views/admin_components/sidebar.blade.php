<!-- BEGIN: Sidebar Navigation -->
<!-- BEGIN: Sidebar -->
<div class="sidebar-wrapper group w-0 hidden xl:w-[248px] xl:block">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
    </div>
    <div class="logo-segment">
        <!-- Application Logo -->
        <a class="flex items-center" href="{{ route('admin.dashboard') }}">
            <img src="/assets/img/banner/Top-Notch-Logo-1-250x81.png" class="black_logo" alt="logo" width="120px">
            <img src="{{ asset('assets/images/logo/logo.png') }}" class="white_logo" alt="logo">
        </a>

        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <iconify-icon class="sidebarDotIcon extend-icon text-slate-900 dark:text-slate-200" icon="fa-regular:dot-circle"></iconify-icon>
            <iconify-icon class="sidebarDotIcon collapsed-icon text-slate-900 dark:text-slate-200" icon="material-symbols:circle-outline"></iconify-icon>
        </div>
        
    </div>
    <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <!-- Homepage Settings -->
            <li>
                <a href="{{route('admin.Settings','homepage-settings')}}" class="navItem {{url()->current()==route('admin.Settings','homepage-settings')?'active':''}}">
                    <span class="flex items-center">
                    <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Homepage</span>
                    </span>
                </a>
            </li>
            
            <!-- About Settings -->
            {{-- <li>
                <a href="{{route('admin.Settings','about-settings')}}" class="navItem {{url()->current()==route('admin.Settings','about-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:settings-outline"></iconify-icon>
                        <span>About Us</span>
                    </span>
                </a>
            </li> --}}

             <!-- Business Vertical Category Settings -->
             <li>
                <a href="{{route('admin.Settings','category-settings')}}" class="navItem {{url()->current()==route('admin.Settings','category-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:work-outline"></iconify-icon>
                        <span>Category</span>
                    </span>
                </a>
            </li>
            
            <!-- Service Settings -->
            <li>
                <a href="{{route('admin.Settings','service-settings')}}" class="navItem {{url()->current()==route('admin.Settings','service-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="fluent-mdl2:blog"></iconify-icon>
                        <span>{{ __('Services') }}</span>
                    </span>
                </a>
            </li>

             <!-- Project Settings -->
             <li>
                <a href="{{route('admin.Settings','project-settings')}}" class="navItem {{url()->current()==route('admin.Settings','project-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:work-outline"></iconify-icon>
                        <span>{{ __('Projects') }}</span>
                    </span>
                </a>
            </li>
            
            {{-- Logo settings --}}
            <li>
                <a href="{{route('admin.Settings','logo-settings')}}" class="navItem {{url()->current()==route('admin.Settings','logo-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:contact-page-outline"></iconify-icon>
                        <span>Client Logos</span>
                    </span>
                </a>
            </li> 
           
          
            {{-- Team Settings --}}
            <li>
                <a href="{{route('admin.Settings','team-settings')}}" class="navItem {{url()->current()==route('admin.Settings','team-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:contact-page-outline"></iconify-icon>
                        <span>Teams</span>
                    </span>
                </a>
            </li> 

            {{-- Rule Settings --}}
            <li>
                <a href="{{route('admin.Settings','rule-settings')}}" class="navItem {{url()->current()==route('admin.Settings','rule-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:contact-page-outline"></iconify-icon>
                        <span>Rules</span>
                    </span>
                </a>
            </li> 


            <!-- Contact Settings -->
            <li>
                <a href="{{route('admin.Settings','contact-settings')}}" class="navItem {{url()->current()==route('admin.Settings','contact-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:contact-page-outline"></iconify-icon>
                        <span>Contact</span>
                    </span>
                </a>
            </li>
            
            {{-- General settings --}}
            <li>
                <a href="{{route('admin.Settings','general-settings')}}" class="navItem {{url()->current()==route('admin.Settings','general-settings')?'active':''}}">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="material-symbols:contact-page-outline"></iconify-icon>
                        <span>General Setting</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End: Sidebar -->
