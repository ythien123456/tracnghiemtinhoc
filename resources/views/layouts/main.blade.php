<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        THTH |
        @stack('title')
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/img/favicon.ico')}}" type="image/x-icon">
    <!-- Font awesome -->
    <link href="{{asset('public/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/slick.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('public/css/jquery.fancybox.css')}}" type="text/css" media="screen"/>
    <!-- Theme color -->
    <link id="switcher" href="{{asset('public/css/theme-color/default-theme.css')}}" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
    <!-- custom style sheet -->
    <link href="{{asset('public/css/custom.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet'
          type='text/css'>
    @stack('additionalResources')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <noscript>
        <h1 class="text-center">Hãy cho phép sử dụng Javascript để website có thể hoạt động!</h1>
    </noscript>
</head>
<body>
{{--Begin Header--}}
@include('layouts.header')
{{--End Header--}}

{{--Begin Navbar--}}
@include('layouts.navbar')
{{--End Navbar--}}

{{--Begin body--}}
@yield('content')
{{--End Body--}}

{{--Begin Footer--}}
@include('layouts.footer')
{{--End Footer--}}

</body>

<!-- jQuery library -->
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('public/js/bootstrap.js')}}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{asset('public/js/slick.js')}}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{asset('public/js/waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery.counterup.js')}}"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="{{asset('public/js/jquery.mixitup.js')}}"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('public/js/jquery.fancybox.pack.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('public/js/custom.js')}}"></script>
</html>