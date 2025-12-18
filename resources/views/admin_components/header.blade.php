<div class="z-[9] sticky top-0" id="app_header">
                  <div class="app-header z-[999] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
                     <div class="flex justify-between items-center h-full">
                        <div class="flex items-center md:space-x-4 space-x-4 rtl:space-x-reverse vertical-box">
                           <div class="xl:hidden inline-block">
                              <a class="flex items-center" href="{{route('admin')}}">
                              <img src="/assets/img/banner/Top-Notch-Logo-1-250x81.png" class="black_logo" alt="logo" width="50px">
                              <img src="/assets/img/banner/Top-Notch-Logo-1-250x81.png" class="white_logo" alt="logo">
                              <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white hidden xl:inline-block">DashCode</span>
                              </a>
                           </div>
                       
                        </div>
                        <!-- start horizontal nav -->
                        <div class="main-menu">
                           <ul>
                              <li class="menu-item-has-children">
                                 <!--  Single menu -->
                                 <!-- has dropdown -->
                                 <a href="javascript:void()">
                                    <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                       <span class="icon-box">
                                          <iconify-icon icon=heroicons-outline:home >
                                          </iconify-icon>
                                       </span>
                                       <div class="text-box"> Dashboard
                                       </div>
                                    </div>
                                    <div class="flex-none text-sm ltr:ml-3 rtl:mr-3 leading-[1] relative top-1">
                                       <iconify-icon icon="heroicons-outline:chevron-down">
                                       </iconify-icon>
                                    </div>
                                 </a>
                                 <!-- Megamenu -->
                              </li>
                           </ul>
                        </div>
                        <!-- end top menu -->
                        <!-- end horizontal nav -->
                        <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">
                           <div class="md:block hidden w-full leading-0">
                              <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
                                 inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                                    <!-- <img class="block w-full h-full object-cover rounded-full"  alt="user" /> -->
                                 </div>
                                 <div class="ltr:text-left rtl:text-right">
                                    <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">
                                       @php
                                          $id = Auth::user()->id;
                                          $name = DB::table('users')->where('id', $id)->value('name');
                                       @endphp
                                       {{ $name }}
                                    </span>
                                    <!-- <small class="text-[9px] block"></small> -->
                                 </div>
                                 <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]"
                                    aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                 </svg>
                              </button>
                              <!-- Dropdown menu -->
                              <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
                                 overflow-hidden">
                                 <ul class="py-1 text-sm text-slate-800 dark:text-slate-200" :class="listView ? 'z-20 opacity-100 top-[61px]' : 'opacity-0 -z-20 top-5' " x-show="listView" @click.away="listView = false">
                                    <li>
                                       <a href="{{ route('admin.Profile')}}" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                          dark:text-white font-normal" class="country-list">
                                          <iconify-icon class="text-lg text-textColor dark:text-white mr-2" icon="carbon:user-avatar">
                                          </iconify-icon>
                                          <span class="dropdown-option">
                                          Profile                    </span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ route('admin.logout')}}" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
                                          dark:text-white font-normal" class="country-list">
                                          <iconify-icon class="text-lg text-textColor dark:text-white mr-2" icon="carbon:logout">
                                             </iconify-icon>
                                             <span class="dropdown-option">
                                             Log Out                        </span>
                                       </a>
                                    </li>
                                   
                                 </ul>
                              </div>
                           </div>
                           <button class="smallDeviceMenuController md:hidden block leading-0">
                              <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                           </button>
                           <!-- end mobile menu -->
                        </div>
                        <!-- end nav tools -->
                     </div>
                  </div>
               </div>
               
               <!-- END: header -->