@extends('layouts.main')

@push('title')
    ĐĂNG KÝ
@endpush

@section('additionalResources')
    <script src="{{asset('public/js/jquery-validate/jquery.validate.js')}}"></script>
@endsection

@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>ĐĂNG KÝ</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Trang Chủ</a></li>
                            <li class="active">ĐĂNG KÝ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <div class="container">
        <section id="mu-course-content">
            <div class="registerWrapper panel-group">
                @if(count($errors) || session('registerSubmitMessage'))
                    <div class="alert alert-danger">
                        Thông tin đăng ký sai:
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            @if(session('registerSubmitMessage'))
                                <li>{{session('registerSubmitMessage')}}</li>
                            @endif
                        </ul>
                    </div>
                @endif
                <div class="panel panel-success">
                    <div class="panel-heading"><h1 class="text-center">REGISTER</h1></div>
                    <div class="panel-body">
                        <h4 class="text-center">(*) Tất cả các trường đều bắt buộc nhập.</h4>
                        {!! Form::open(['url' => 'register.html', 'id' => 'registerForm']) !!}
                        <div class="form-group row">
                            {!! Form::label('Email','Địa chỉ Email:',['class' => 'col-sm-4 control-label']) !!}
                            <div class="col-sm-8">
                                {!! Form::email('Email','',['class' => 'form-control', 'required' => 'true']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('Password','Mật khẩu:',['class' => 'col-sm-4 control-label']) !!}
                            <div class="col-sm-8">
                                {!! Form::password('Password',['id' => 'Password', 'class' => 'form-control','required' => 'true']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('PasswordConfirmation','Xác nhận mật khẩu:',['class' => 'col-sm-4 control-label']) !!}
                            <div class="col-sm-8">
                                {!! Form::password('PasswordConfirmation',['class' => 'form-control','required' => 'true']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('FirstName','Tên:',['class' => 'col-sm-4 control-label']) !!}
                            <div class="col-sm-8">
                                {!! Form::text('FirstName','',['class' => 'form-control', 'required' => 'true']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                {!! Form::submit('ĐĂNG KÝ NGAY!',['class' => 'btn btn-success form-control']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        $('#registerForm').validate({
            rules: {
                Email: {
                    required: true,
                    email: true,
                    minlength: 8,
                },
                Password: {
                    required: true,
                    minlength: 5
                },
                PasswordConfirmation: {
                    required: true,
                    equalTo: "#Password"
                },
                FirstName: {
                    required: true,
                }
            },
            messages: {
                Email: {
                    required: "Vui lòng nhập địa chỉ Email",
                    email: "Hãy nhập một địa chỉ email hợp lệ",
                    minlength: "Email có ít nhất 8 ký tự",
                    remote: "Email đã tồn tại"
                },
                Password: {
                    required: "Vui lòng nhập mật khẩu!",
                    minlength: "Mật khẩu có ít nhất 5 ký tự"
                },
                PasswordConfirmation: {
                    required: "Vui lòng nhập mật khẩu xác nhận!",
                    equalTo: "Mật khẩu xác nhận không trùng khớp"
                },
                FirstName: {
                    required: "Vui lòng nhập tên của bạn!"
                }
            }
        })
    </script>
@endsection