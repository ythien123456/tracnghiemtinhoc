@extends('layouts.main')
@push('title')
    @if(isset($post))
        {{$post->PostTitle}}
    @endif
@endpush
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>{{$post->PostTitle}}</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li>Bài viết</li>
                            <li class="active">{{$post->PostTitle}}</li>
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
                                <div class="mu-course-container mu-blog-single">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <article class="mu-blog-single-item">
                                                <figure class="mu-blog-single-img">
                                                    <a href="#"><img src="{{$thumbnail}}"
                                                                     title="{{$post->PostSlug}}"></a>
                                                    <figcaption class="mu-blog-caption">
                                                        <h3><a href="#">@if(isset($post))
                                                                    {{$post->PostTitle}}
                                                                @endif</a></h3>
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-blog-meta">
                                                    Đăng bởi <a href="#">{{$post->FirstName.' '.$post->LastName}}</a>
                                                    ― {{$post->PostDate}}
                                                    ― <i class="fa fa-eye"></i> {{$post->Views}}
                                                </div>
                                                <hr style="border: 1.5px black solid; width: 70%; margin: 30px auto;opacity: 0.5;">
                                                <div class="mu-blog-description">
                                                    @if(isset($post))
                                                        {!! $post->PostContent !!}
                                                    @endif
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- end course content container -->
                                <!-- start related course item -->
                                @if(count($relatedPosts)>0)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mu-related-item">
                                                <h3>Các bài viết liên quan</h3>
                                                <div class="mu-related-item-area">
                                                    <div id="mu-related-item-slide">
                                                        @foreach($relatedPosts as $relatedPost)
                                                            @php
                                                                preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $relatedPost->PostFullContent, $firstImageUrlInPost);
                                                                $relatedThumbnail = isset($firstImageUrlInPost['src']) ? $firstImageUrlInPost['src'] : url('public/images/modules/'.$relatedPost->ModuleID.'.jpg');
                                                            @endphp
                                                            <div class="col-md-6">
                                                                <article class="mu-blog-single-item">
                                                                    <figure class="mu-blog-single-img">
                                                                        <a href="{{url('p/'.$relatedPost->PostSlug)}}.html"><img
                                                                                    src="{{$relatedThumbnail}}"
                                                                                    title="{{$relatedPost->PostSlug}}"></a>
                                                                        <figcaption class="mu-blog-caption">
                                                                            <h3>
                                                                                <a href="{{url('p/'.$relatedPost->PostSlug)}}.html">{{$relatedPost->PostTitle}}</a>
                                                                            </h3>
                                                                        </figcaption>
                                                                    </figure>
                                                                    <div class="mu-blog-meta">
                                                                    </div>
                                                                    <div class="mu-blog-description">
                                                                        <p>{{strip_tags($relatedPost->PostContent)}}
                                                                            ...</p>
                                                                        <a href="{{url('p/'.$relatedPost->PostSlug)}}.html"
                                                                           class="mu-read-more-btn">Đọc thêm</a>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endif
                            <!-- end start related course item -->
                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Danh mục bài học</h3>
                                        <ul class="mu-sidebar-catg">
                                            @foreach($moduleList as $module)
                                                @if($module->ModuleType!=2)
                                                    <li>
                                                        <a href="{{url('p/modules/'.$module->ModuleID)}}">{{$module->ModuleName}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Danh mục bài viết</h3>
                                        <ul class="mu-sidebar-catg">
                                            @foreach($moduleList as $module)
                                                @if($module->ModuleType!=1)
                                                    <li>
                                                        <a href="{{url('p/modules/'.$module->ModuleID)}}">{{$module->ModuleName}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- end single sidebar -->
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Được xem nhiều</h3>
                                        <div class="mu-sidebar-popular-courses">
                                            @foreach($mostViewed as $mvPost)
                                                <div class="mu-sidebar-popular-courses">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="{{url('/p/'.$mvPost->PostSlug).'.html'}}">
                                                                <img class="media-object"
                                                                     src="{{url('public/images/modules/'.$mvPost->ModuleID.'.jpg')}}"
                                                                     alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="media-heading" style="font-size: 13px;"><a href="{{url('/p/'.$mvPost->PostSlug).'.html'}}">{{$mvPost->PostTitle}}</a></h4>
                                                            <span class="popular-course-price"><i class="fa fa-eye"></i> {{$mvPost->Views}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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