@extends('layouts.main')

@section('content')
    <div class="container">
        @if(session('registerSubmitMessage'))
            <div class="alert alert-success">
                {{session('registerSubmitMessage')}}
            </div>
        @endif
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                Thông tin đăng nhập sai:
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(isset($queryError))
            <div class="alert alert-danger">
                {{$queryError}}
            </div>
        @endif
        <div class="loginWrapper">
            <h2 class="text-center">
                LOGIN
            </h2>
            <form method="POST" class="loginForm">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{--dòng csrf_token() bắt buộc phải có (chống Cross-site Request Forgery), không có sẽ báo lỗi TokenMismatchException--}}
                <input type="email" name="Email" class="form-control" placeholder="Email..">
                <input type="password" name="Password" class="form-control" placeholder="Password..">
                <input type="submit" class="btn btn-primary form-control" value="Đăng Nhập">
        </div>
    </div>
@endsection