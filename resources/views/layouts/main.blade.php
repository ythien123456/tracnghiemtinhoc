<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{asset('public/js/jquery-validate/jquery.validate.js')}}"></script>
    <title>Trắc Nghiệm Tin Học Online</title>
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
<script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>

</html>