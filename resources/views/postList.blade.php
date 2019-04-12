@extends('layouts.main')
@push('title')
    {{isset($title) ? $title : ''}}
@endpush
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Bài viết</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li><a href="{{route('allPosts')}}">Bài viết</a></li>
                            <li class="active">{{$title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-9">
                                <!-- start course content container -->
                                <div class="mu-course-container mu-blog-archive">
                                    <div class="row">
                                        @if(isset($posts))
                                            @foreach($posts as $post)
                                                <div class="col-md-6 col-sm-6">
                                                    <article class="mu-blog-single-item">
                                                        <figure class="mu-blog-single-img">
                                                            <a href="{{url('p/'.$post->PostSlug)}}.html"><img
                                                                        src="{{asset('public/images/modules/'.$post->ModuleID.'.jpg')}}"
                                                                        alt="img"></a>
                                                            <figcaption class="mu-blog-caption">
                                                                <h3><a href="{{url('p/'.$post->PostSlug)}}.html"
                                                                       title="{{$post->PostTitle}}">{{$post->PostTitle}}</a>
                                                                </h3>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="mu-blog-description">
                                                            <p>{{strip_tags($post->PostContent)}}...</p>
                                                            <a class="mu-read-more-btn"
                                                               href="{{url('p/'.$post->PostSlug)}}.html">Đọc thêm →</a>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="alert alert-info" style="height:100%;">
                                                {{$message}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <!-- end course content container -->
                                <!-- start course pagination -->
                                @if(isset($posts))
                                    <div class="mu-pagination">
                                        {{$posts->links()}}
                                    </div>
                                @endif
                            <!-- end course pagination -->
                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Danh mục</h3>
                                        <ul class="mu-sidebar-catg">
                                            @foreach($moduleList as $module)
                                                <li><a href="{{url('p/modules/'.$module->ModuleID)}}">{{$module->ModuleName}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Được xem nhiều</h3>
                                        <div class="mu-sidebar-popular-courses">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{url('public/img/word750x500.jpg')}}"
                                                             alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Medical Science</a></h4>
                                                    <span class="popular-course-price">$200.00</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{url('public/img/word750x500.jpg')}}"
                                                             alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Web Design</a></h4>
                                                    <span class="popular-course-price">$250.00</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="{{url('public/img/word750x500.jpg')}}"
                                                             alt="img">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">Health & Sports</a></h4>
                                                    <span class="popular-course-price">$90.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end single sidebar -->
                                </aside>
                                <!-- / end sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection