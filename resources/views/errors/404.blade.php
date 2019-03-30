@extends('layouts.main')

@section('title')
    Lỗi 404
@endsection
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>404</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">404</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <!-- Start error section  -->
    <section id="mu-error">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-error-area">
                        <p>Trang của bạn đang tìm kiếm không có tồn tại thì phải!</p>
                        <span>Không có tài nguyên nào của hệ thống nằm trở trang mà bạn đang vào cả, vui lòng quay lại nhé.</span>
                        <h2>404</h2>
                        <a class="mu-post-btn" href="{{route('home')}}">TRỞ VỀ TRANG CHỦ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End error section  -->
@endsection