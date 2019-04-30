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
    <!-- jQuery -->
    <script src="{{asset('public/admin-assets/js')}}/jquery.min.js"></script>
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
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>{{session('AdminID') ? session('AdminEmail') : ''}}<b
                            class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{route('getAdLogout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->
        <script>

        </script>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{url('/tn-admin-th/dashboard')}}"
                           class="{{Request::is('tn-admin-th/dashboard') ? 'active' : ''}}"><i
                                    class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li class="@stack('active-quan-ly')">
                        <a href="#"
                           class="@stack('active-quan-ly')"><i
                                    class="fa fa-table fa-fw"></i> Quản lý<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/tn-admin-th/accounts')}}"
                                   class="{{Request::is('tn-admin-th/accounts') ? 'active' : ''}}"><i
                                            class="fa fa-group"></i> Tài khoản</a>
                            </li>
                            <li>
                                <a href="{{url('/tn-admin-th/exams')}}"
                                   class="{{Request::is('tn-admin-th/exams') ||
                                   Request::is('tn-admin-th/exams/*') ? 'active' : ''}}"><i
                                            class="fa fa-newspaper-o"></i> Đề thi</a>
                            </li>
                            <li>
                                <a href="{{url('/tn-admin-th/questions')}}"
                                   class="{{Request::is('tn-admin-th/questions') ? 'active' : ''}}"><i
                                            class="fa fa-question"></i> Câu hỏi</a>
                            </li>
                            <li>
                                <a href="{{url('/tn-admin-th/posts')}}"
                                   class="{{Request::is('tn-admin-th/posts')||
                                   Request::is('tn-admin-th/posts/*') ? 'active' : ''}}"><i
                                            class="fa fa-paragraph"></i> Bài viết</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
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

<!-- DataTables JavaScript -->
<script src="{{asset('public/admin-assets')}}/js/dataTables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin-assets')}}/js/dataTables/dataTables.bootstrap.min.js"></script>
@stack('additionalJS')

</body>
</html>
