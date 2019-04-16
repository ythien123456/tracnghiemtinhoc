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
                        <a href="#">
                            <li class="item"><i class="fa fa-info-circle"></i> Thông tin tài khoản</li>
                        </a>
                        <a href="#">
                            <li class="item"><i class="fa fa-history"></i> Lịch sử thi</li>
                        </a>
                        <a href="#">
                            <li class="item"><i class="fa fa-lock"></i> Đổi mật khẩu</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-9 profile-right">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-envelope"></i> Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-user"></i> Họ</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-user"></i> Tên</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-heart"></i> Giới tính</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-home"></i> Địa chỉ</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-phone"></i> Số điện thoại</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-archive"></i> Nơi làm việc</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-3"><i class="fa fa-dashboard"></i> Ngày tham gia</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection