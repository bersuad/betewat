<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fontfaces CSS-->
        <link href="{{asset('admin/css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="{{asset('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/select2/select2.min.cs')}}s" rel="stylesheet" media="all">
        <link href="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="{{asset('admin/css/theme.css')}}" rel="stylesheet" media="all">

        <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
        <title>{{config('app.name', 'Betewat-Casting-Agent')}}</title>
    </head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('included.admin.navbar')
        <div class="bodyStart">
            @yield('content')
        </div>
        @include('included.admin.footer')

        <!-- js links -->
        <!-- Jquery JS-->
        <script src="{{asset('admin/vendor/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap JS-->
        <script src="{{asset('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!-- Vendor JS       -->
        <script src="{{asset('admin/vendor/slick/slick.min.js')}}">
        </script>
        <script src="{{asset('admin/vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('admin/vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
        </script>
        <script src="{{asset('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('admin/vendor/counter-up/jquery.counterup.min.js')}}">
        </script>
        <script src="{{asset('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('admin/vendor/select2/select2.min.js')}}">
        </script>

        <!-- Main JS-->
        <script src="{{asset('admin/js/main.js')}}"></script>
        <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
