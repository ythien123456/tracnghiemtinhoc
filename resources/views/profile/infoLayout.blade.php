@extends('layouts.main')

@push('title')
    TRANG CÁ NHÂN
@endpush

@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>THÔNG TIN CÁ NHÂN</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang Chủ</a></li>
                            <li class="active">THÔNG TIN CÁ NHÂN</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container profile-form">
            <div class="row">
                <div class="col-md-3 profile-left">
                    <ul>
                        <li class="title">Tài khoản</li>
                        <a href="{{url('/profile.html')}}">
                            <li class="item"><i class="fa fa-info-circle"></i> Xem thông tin</li>
                        </a>
                        <a href="{{url('/info.html')}}">
                            <li class="item"><i class="fa fa-edit"></i> Sửa thông tin</li>
                        </a>
                        <a href="{{url('/score.html')}}">
                            <li class="item"><i class="fa fa-history"></i> Lịch sử thi</li>
                        </a>
                        <a href="{{url('/change-password.html')}}">
                            <li class="item"><i class="fa fa-lock"></i> Đổi mật khẩu</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-9 profile-right" style="border-radius:10px;">
                    @if(Route::currentRouteName()=='info')
                        @include('profile.changeInfo')
                    @elseif(Route::currentRouteName()=='score')
                        @include('profile.scoreHistory')
                    @elseif(Route::currentRouteName()=='change-password')
                        @include('profile.changePass')
                    @else
                        @include('profile.info')
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection