@extends('layouts.main')

@push('title')
    {{$examType->TypeTitle}}
@endpush
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Đề tổng hợp</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Đề tổng hợp</li>
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
                                <div class="mu-course-container">
                                    <div class="row">
                                        @if(isset($examList))
                                            @foreach($examList as $exam)
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="mu-latest-course-single">
                                                        <figure class="mu-latest-course-img">
                                                            <a href="{{url()->current().'/'.$exam->ExamID.'-'.$exam->ExamSlug.'.html'}}"><img
                                                                        src="{{asset('public/images/examtypes/'.$examType->TypeID.'.jpg')}}"
                                                                        alt="img"></a>
                                                            <figcaption class="mu-latest-course-imgcaption">
                                                                Câu hỏi: {{$exam->TotalQuestions}}
                                                                <span><i class="fa fa-clock-o"></i>{{$exam->TimeLimit}} Phút</span>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="mu-latest-course-single-content">
                                                            <h4>
                                                                <a href="{{url()->current().'/'.$exam->ExamID.'-'.$exam->ExamSlug.'.html'}}">{{$exam->ExamTitle}}</a>
                                                            </h4>
                                                            <p>{{$exam->ExamDescription}}</p>
                                                            <div class="mu-latest-course-single-contbottom">
                                                                <a class="mu-course-details"
                                                                   href="{{url()->current().'/'.$exam->ExamID.'-'.$exam->ExamSlug.'.html'}}">Vào
                                                                    Thi Ngay</a>
{{--                                                                <span class="mu-course-price" href="#">$165.00</span>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="alert alert-info">
                                                {{$message}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <!-- end course content container -->
                                <!-- start course pagination -->
                                <div class="mu-pagination">
                                    {{isset($examList) ? $examList->links() : ''}}
                                </div>
                                <!-- end course pagination -->
                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Loại đề thi</h3>
                                        <ul class="mu-sidebar-catg">
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach($examTypeList as $examTypes)
                                                <li><a href="{{url('/e/'.$examTypes->TypeSlug.'')}}">{{$i++}}. {{$examTypes->TypeTitle}}</a></li>

                                            @endforeach
                                        </ul>
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