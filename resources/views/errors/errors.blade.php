@extends('layouts.main')

@push('title')
    Lỗi không xác định
@endpush
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Lỗi</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Error</li>
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
                        <p>Đã có lỗi xảy ra!</p>
                        <span>Nếu bạn cảm thấy đây là một lỗi nghiêm trọng của website, hãy báo cáo cho chúng tôi biết. Cảm ơn bạn rất nhiều.</span>
                        <h2>Error</h2>
                        <a class="mu-post-btn" href="{{route('home')}}">TRỞ VỀ TRANG CHỦ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End error section  -->
@endsection