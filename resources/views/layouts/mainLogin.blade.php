<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | An-Nahar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template') }}/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('template') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('template') }}/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading authentication-bg"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="/">
                                <span><img src="{{ asset('template') }}/assets/images/logo.png" alt=""
                                        height="18"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">
                            @include('layouts.v_content')

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    {{-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}"
                                    class="text-muted ms-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div> --}}
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2018 - 2021 © Hyper - Coderthemes.com
    </footer>

    <!-- bundle -->
    <script src="{{ asset('template') }}/assets/js/vendor.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/app.min.js"></script>

</body>

</html>
