<!DOCTYPE html>
<html lang="en">

@include('layouts.v_head2')

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.v_sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('layouts.v_topbar')
                <!-- end Topbar -->

                <!-- Start Content-->
                @include('layouts.v_content')
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.v_rightsidebar')
    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <!-- bundle -->
    <script src="{{ asset('template') }}/assets/js/vendor.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="{{ asset('template') }}/assets/js/vendor/apexcharts.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/buttons.html5.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/buttons.flash.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/buttons.print.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/dataTables.select.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('template') }}/assets/js/pages/demo.form-wizard.js"></script>
    <!-- end demo js-->

    <!-- Typehead -->
    <script src="{{ asset('template') }}/assets/js/vendor/handlebars.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/vendor/typeahead.bundle.min.js"></script>

    <!-- demo app -->
    <script src="{{ asset('template') }}/assets/js/pages/demo.dashboard.js"></script>
    <script src="{{ asset('template') }}/assets/js/pages/demo.datatable-init.js"></script>
    <script src="{{ asset('template') }}/assets/js/pages/demo.customers.js"></script>
    <script src="{{ asset('template') }}/assets/js/pages/demo.typehead.js"></script>

    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Timepicker -->
    <script src="{{ asset('template') }}/assets/js/pages/demo.timepicker.js"></script>
    <script>
        $("#datepicker").datepicker({
            format: "yyyy-mm-dd HH:mm:ss"
        })
    </script>
    <!-- plugin js -->
    <script src="{{ asset('template') }}/assets/js/vendor/dropzone.min.js"></script>
    <!-- init js -->
    <script src="{{ asset('template') }}/assets/js/ui/component.fileupload.js"></script>
    @yield('js')
    <!-- end demo js-->
</body>

</html>
