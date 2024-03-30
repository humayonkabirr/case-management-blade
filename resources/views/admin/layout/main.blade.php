<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        .sidebar-wrapper {
            -webkit-box-shadow: -9px 0px 0px rgb(0 0 0 / 8%), 0.2px 0 0px rgba(0, 0, 0, 0.003), 0.4px 0 0px rgba(0, 0, 0, 0.004), 0.6px 0 0px rgba(0, 0, 0, 0.004), 0.9px 0 0px rgba(0, 0, 0, 0.005), 1.2px 0 0px rgba(0, 0, 0, 0.006), 1.8px 0 0px rgba(0, 0, 0, 0.006), 2.6px 0 0px rgba(0, 0, 0, 0.007), 3.9px 0 0px rgba(0, 0, 0, 0.008), 7px 0 0px rgba(0, 0, 0, 0.01);
            -moz-box-shadow: -9px 0px 0px rgb(0 0 0 / 8%), 0.2px 0 0px rgba(0, 0, 0, 0.003), 0.4px 0 0px rgba(0, 0, 0, 0.004), 0.6px 0 0px rgba(0, 0, 0, 0.004), 0.9px 0 0px rgba(0, 0, 0, 0.005), 1.2px 0 0px rgba(0, 0, 0, 0.006), 1.8px 0 0px rgba(0, 0, 0, 0.006), 2.6px 0 0px rgba(0, 0, 0, 0.007), 3.9px 0 0px rgba(0, 0, 0, 0.008), 7px 0 0px rgba(0, 0, 0, 0.01);
            box-shadow: -9px 0px 0px rgb(0 0 0 / 8%), 0.2px 0 0px rgba(0, 0, 0, 0.003), 0.4px 0 0px rgba(0, 0, 0, 0.004), 0.6px 0 0px rgba(0, 0, 0, 0.004), 0.9px 0 0px rgba(0, 0, 0, 0.005), 1.2px 0 0px rgba(0, 0, 0, 0.006), 1.8px 0 0px rgba(0, 0, 0, 0.006), 2.6px 0 0px rgba(0, 0, 0, 0.007), 3.9px 0 0px rgba(0, 0, 0, 0.008), 7px 0 0px rgba(0, 0, 0, 0.01);
        }

        /*
            Just for demo purpose ---- Remove it.
        */
        /*<starter kit design>*/

        .widget-one {}

        .widget-one h6 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0px;
            margin-bottom: 22px;
        }

        .widget-one p {
            font-size: 15px;
            margin-bottom: 0;
        }

        /*/<starter kit design>*/
    </style>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->


    @stack('css')

</head>

<body>

    <!--  BEGIN NAVBAR  -->
    @include('admin.partials.nav')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('admin.partials.sidebar')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                @yield('content')

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    @stack('js')
</body>

</html>
