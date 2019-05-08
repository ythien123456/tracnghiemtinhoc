<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TNTH - @stack('title')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('public/admin-assets/css')}}/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{asset('public/admin-assets/css')}}/metisMenu.min.css" rel="stylesheet">
    <link href="{{asset('public/admin-assets/css')}}/startmin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('public/admin-assets/css')}}/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery library -->
    <script src="{{asset('public/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/admin-assets/js')}}/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('public/admin-assets/js')}}/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('public/admin-assets/js')}}/startmin.js"></script>
    <!-- DataTables CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
    <script src="{{asset('public/admin-assets')}}/js/jquery.validate.js"></script>
@stack('additionalCSS')
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('adminDashboard')}}">TNTH Admin Panel</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Bật thanh công cụ</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="{{route('home')}}" target="_blank"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>{{session('AdminID') ? session('AdminEmail') : ''}}<b
                            class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{route('getAdLogout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">

                    </li>
                    <li>
                        <a href="{{url('/tn-admin-th/dashboard')}}"
                           class="{{Request::is('tn-admin-th/dashboard') ? 'active' : ''}}"><i
                                    class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li class="{{Request::is('tn-admin-th/accounts') || Request::is('tn-admin-th/roles')  ? 'active' : ''}}">
                        <a href="#" class="{{Request::is('tn-admin-th/accounts') || Request::is('tn-admin-th/roles') ? 'active' : ''}}">
                            <i class="fa fa-user-md"></i> Tài khoản<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/tn-admin-th/accounts')}}"
                                   class="{{Request::is('tn-admin-th/accounts') ? 'active' : ''}}"><i
                                            class="fa fa-user"></i> Quản lý tài khoản</a>
                            </li>
                            <li>
                                <a href="{{url('/tn-admin-th/roles')}}"
                                   class="{{Request::is('tn-admin-th/roles') ? 'active' : ''}}"><i
                                            class="fa fa-group"></i> Quản lý quyền hạn</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{Request::is('tn-admin-th/exams') || Request::is('tn-admin-th/modules') ? 'active' : ''}}">
                        <a href="#" class="{{Request::is('tn-admin-th/exams') || Request::is('tn-admin-th/modules') ? 'active' : ''}}">
                            <i class="fa fa-align-justify"></i> Đề thi<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/tn-admin-th/exams')}}"
                                   class="{{Request::is('tn-admin-th/exams') ||
                                   Request::is('tn-admin-th/exams/*') ? 'active' : ''}}"><i
                                            class="fa fa-newspaper-o"></i> Quản lý đề thi</a>
                            </li>
                            <li>
                                <a href="{{url('/tn-admin-th/modules')}}"
                                   class="{{Request::is('tn-admin-th/modules') ||
                                   Request::is('tn-admin-th/modules/*') ? 'active' : ''}}"><i
                                            class="fa fa-archive"></i> Quản lý Modules</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/tn-admin-th/questions')}}"
                           class="{{Request::is('tn-admin-th/questions') ? 'active' : ''}}"><i
                                    class="fa fa-question"></i> Quản lý câu hỏi</a>
                    </li>
                    <li class="{{Request::is('tn-admin-th/posts') || Request::is('tn-admin-th/categories') ? 'active' : ''}}">
                        <a href="#" class="{{Request::is('tn-admin-th/posts') || Request::is('tn-admin-th/categories') ? 'active' : ''}}">
                            <i class="fa fa-paragraph"></i> Bài viết<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/tn-admin-th/posts')}}"
                                   class="{{Request::is('tn-admin-th/posts')||
                                   Request::is('tn-admin-th/posts/*') ? 'active' : ''}}"><i
                                            class="fa fa-eyedropper"></i> Quản lý bài viết</a>
                            </li>
                            <li>
                                <a href="{{url('/tn-admin-th/categories')}}"
                                   class="{{Request::is('tn-admin-th/categories')||
                                   Request::is('tn-admin-th/categories/*') ? 'active' : ''}}"><i
                                            class="fa fa-calendar-check-o"></i> Quản lý danh mục</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script src="{{asset('public')}}/js/bootbox.all.min.js"></script>
<!-- DataTables JavaScript -->
<script src="{{asset('public/admin-assets')}}/js/dataTables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin-assets')}}/js/dataTables/dataTables.bootstrap.min.js"></script>
@stack('additionalJS')

</body>
</html>
