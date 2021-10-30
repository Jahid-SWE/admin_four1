 <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:06:42 GMT -->
<head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">
         <!-- DataTables -->
        <link href="{{asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
        <link href="{{asset('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet"/>

        <!-- Responsive datatable examples -->
        <link href="{{asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>

        <!-- Bootstrap Css -->
        <link href="{{asset('/assets/css/bootstrap.min.css')}}"  rel="stylesheet"/>
        <!-- Icons Css -->
        <link href="{{asset('/assets/css/icons.min.css')}}" rel="stylesheet"/>
        <!-- App Css-->
        <link href="{{asset('/assets/css/app.min.css')}}"  rel="stylesheet"/>

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

  @include('includes.header')
  @include('includes.menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('body')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal -->
                <!-- end modal -->

               @include('includes.footer')
            </div>

        </div>
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('/assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <script src="{{asset('/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('/assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('/assets/js/pages/datatables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('/assets/js/app.js')}}"></script>
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:20 GMT -->
</html>

