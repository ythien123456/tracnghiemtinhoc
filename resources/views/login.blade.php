@extends('layouts.main')

@push('title')
    ĐĂNG NHẬP
@endpush

@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>ĐĂNG NHẬP</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">ĐĂNG NHẬP</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <div class="container">
        <section id="mu-course-content">
            <div class="loginWrapper panel-group">
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
                <div class="panel panel-info">

                    <div class="panel-heading"><h1 class="text-center">LOGIN</h1></div>
                    <form method="POST" class="loginForm" action="{{route('postLogin')}}">
                        <div class="panel-body">
                            {{csrf_field()}}
                            <input type="email" name="Email" class="form-control" placeholder="Email..">
                            <input type="password" name="Password" class="form-control" placeholder="Password..">
                        </div>
                        <div class="panel-footer">
                            <input type="submit" class="btn btn-primary form-control" value="Đăng Nhập">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection