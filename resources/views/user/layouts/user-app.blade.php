<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/StarAdmin-Template/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/StarAdmin-Template/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/StarAdmin-Template/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="/StarAdmin-Template/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
        
        <!-- partial:admin.layouts.partials.admin-navbar -->
        @include('user.layouts.partials.user-navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <!-- partial:admin.layouts.partials.admin-sidebar -->
            @include('user.layouts.partials.user-sidebar')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    
                </div>
                <!-- content-wrapper ends -->

                <!-- partial:admin.layouts.partials.admin-footer -->
                @include('user.layouts.partials.user-footer')
            </div>
            <!-- main-panel ends -->
        </div>
      <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/StarAdmin-Template/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/StarAdmin-Template/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/StarAdmin-Template/assets/js/shared/off-canvas.js"></script>
    <script src="/StarAdmin-Template/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/StarAdmin-Template/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
  </body>
</html>