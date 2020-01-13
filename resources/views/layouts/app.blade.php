<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- css links -->
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/login.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/fontawesome/css/fontawesome.css')}}">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Courgette|Libre+Baskerville|Noto+Sans|Raleway" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{asset('/css/home.min.css')}}">
        <title>{{config('app.name', 'Betewat-Casting-Agent')}}</title>
</head>
<body>
    @include('included.navbar')
        <div class="bodyStart">
            @yield('content')
        </div>
    @include('included.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
