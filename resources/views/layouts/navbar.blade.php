<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
                <a class="navbar-brand" href="{{route('home')}}"><i class="fa fa-university"></i><span>TNTH</span></a>
                <!-- IMG BASED LOGO  -->
                <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="{{Request::is('/') || Route::currentRouteName()=='home' ? 'active' : ''}}"><a
                                href="{{route('home')}}">Trang Chủ</a></li>
                    <li class="dropdown {{Request::is('e/*') ? 'active' : ''}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Đề thi <span
                                    class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($examTypeList as $examType)
                                <li><a href="{{url('/e/'.$examType->TypeSlug.'')}}">{{$examType->TypeTitle}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown {{Request::is('p/*') && !Request::is('p/*/7') && !Request::is('p/*/8') ? 'active' : ''}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bài học <span
                                    class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($categoryList as $category)
                                @if($category->CategoryType!=2)
                                    <li>
                                        <a href="{{route('postspostListByCategory',['categoryID' => $category->CategoryID])}}">
                                            {{$category->CategoryName}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown {{Request::is('p/*/7') || Request::is('p/*/8') ? 'active' : ''}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bài viết <span
                                    class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($categoryList as $category)
                                @if($category->CategoryType!=1)
                                    <li>
                                        <a href="{{route('postspostListByCategory',['categoryID' => $category->CategoryID])}}">
                                            {{$category->CategoryName}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="{{Route::currentRouteName()=='about' ? 'active' : ''}}"><a href="{{route('about')}}">Giới
                            Thiệu</a></li>
                    {{--                    <li class="{{Route::currentRouteName()=='contact' ? 'active' : ''}}"><a href="{{url('/contact.html')}}">Liên Hệ</a></li>--}}

                    @if(Session::has('AccountID'))
                        <li class="{{Route::currentRouteName()=='profile' ? 'active' : ''}}"><a
                                    href="{{route('profile')}}"><b>{{session('FirstName').' '.session('LastName')}}</b></a>
                        </li>
                        <li style="background: rgba(240,77,62,0.1);"><a href="{{route('logout')}}">Đăng xuất</a></li>
                    @else
                        <li style="background: rgba(48,201,222,0.3);"><a href="{{route('login')}}">Đăng Nhập</a></li>
                        <li style="background: rgba(99,255,125,0.3);"><a href="{{route('register')}}">Đăng Ký</a></li>
                    @endif
                    {{--                    <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>--}}
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
{{--<!-- Start search box -->--}}
{{--<div id="mu-search">--}}
{{--    <div class="mu-search-area">--}}
{{--        <button class="mu-search-close"><span class="fa fa-close"></span></button>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <form class="mu-search-form">--}}
{{--                        <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- End search box -->--}}