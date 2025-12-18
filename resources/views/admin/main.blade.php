<!DOCTYPE html>
<html lang="en" dir="ltr" class="light nav-floating">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="T6l9qUZoUnvKvjz3WqNbUxqcmbNPBLHfqzxg9z4H">
      <link rel="icon" href="{{ asset('assets/images/favicon.png')}}" type="image/png">
     
      <title>@yield('title')- TOP NOTCH - Dashboard</title>
      <!-- Main Style CSS -->
      <link rel="stylesheet" href="{{ asset('admin_assets/css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/countrySelect.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/dragula.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/dropzone.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/flatpickr.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/jquery-jvectormap-2.0.5.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/leaflet.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/nice-select.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/plyr.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/quill.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/select2.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/sidebar-menu.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/SimpleBar.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/swiper-bundle.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_assets/css/plugins/zabuto_calendar.min.css') }}">
   </head>
   <body class="font-inter dashcode-app" id="body_class">
      <div class="app-wrapper">
         @include('admin_components.sidebar')
         <div class="flex flex-col justify-between min-h-screen">
            <div>
               <!-- BEGIN: header -->
              @include('admin_components.header')
               <div class="content-wrapper transition-all duration-150 ltr:ml-0 xl:ltr:ml-[248px] rtl:mr-0 xl:rtl:mr-[248px]" id="content_wrapper">
                  <div class="page-content">
                     <div class="transition-all duration-150 container-fluid" id="page_layout">
                        <main id="content_layout">
                           <!-- Page Content -->
                          @yield('content')
                        </main>
                     </div>
                  </div>
               </div>
            </div>
            <!-- BEGIN: footer -->
            <!-- BEGIN: Footer For Desktop and tab -->
            @include('admin_components.footer')
            <!-- END: Footer For Desktop and tab -->
            <!-- END: footer -->
         </div>
      </div>
      <!-- Main JS -->
      <script src="{{ asset('admin_assets/js/app.js') }}"></script>
      <script src="{{ asset('admin_assets/js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('admin_assets/js/main.js') }}"></script>
      <script src="{{ asset('admin_assets/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin_assets/js/bootstrap.js') }}"></script>
      <script src="{{ asset('admin_assets/js/plugins/iconify.js') }}"></script>
      <script src="{{ asset('admin_assets/js/plugins/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('admin_assets/js/plugins/Select2.min.js') }}"></script>
      <script src="{{ asset('admin_assets/js/custom/app-chat.js') }}"></script>
      <script src="{{ asset('admin_assets/js/custom/app-email.js') }}"></script>
      <script src="{{ asset('admin_assets/js/custom/main.js') }}"></script>
      <script src="{{ asset('admin_assets/js/custom/sidebar-menu.js') }}"></script>
      <script src="{{ asset('admin_assets/js/custom/step-form.js') }}"></script>
      <script src="{{ asset('admin_assets/js/tw-elements-1.0.0-alpha13.min.js') }}"></script>
      <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.7.0/tinymce.min.js' referrerpolicy="origin"></script>
      <script type="text/javascript">
         tinymce.init({
            selector: '#blogs-desc',
            
            plugins: [
               'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
               'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
               'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
               'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
               'forecolor backcolor emoticons | help',
         });
      </script>
      <script type="text/javascript">
         tinymce.init({
            selector: '#features',
            
            plugins: [
               'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
               'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
               'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
               'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
               'forecolor backcolor emoticons | help',
         });
      </script>
      <script type="text/javascript">
         tinymce.init({
            selector: '#course-desc',
            
            plugins: [
               'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
               'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
               'media', 'table', 'emoticons', 'template', 'help'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
               'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
               'forecolor backcolor emoticons | help',
         });
      </script>
      <script>
     // data table validation
      $("#data-table").DataTable({
         dom: "<'grid grid-cols-2 gap-5 px-6 mt-6'<'col-span-4'l><'col-span-8 flex justify-end'f><'#pagination.flex items-center'>><'min-w-full't><'flex justify-end items-center'p>",
         paging: true,
         ordering: true,
         info: false,
         searching: true,
         lengthChange: true,
         lengthMenu: [10, 25, 50, 100],
         language: {
            lengthMenu: "Show _MENU_ entries",
            paginate: {
            previous: "<iconify-icon icon=\"ic:round-keyboard-arrow-left\"></iconify-icon>",
            next: "<iconify-icon icon=\"ic:round-keyboard-arrow-right\"></iconify-icon>"
            },
            search: "Search:"
         }
      });
      </script>  
   </body>
</html>