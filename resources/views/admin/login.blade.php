<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TNTH - Đăng nhập</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('public/admin-assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset('public/admin-assets')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="background: lightgray;>

<div class="container">
    <div class="row" style="margin-top: 200px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">TNTH | ADMIN LOGIN</h3>
                </div>
                <div class="panel-body">
                    @if(session('errMessage'))
                        <div class="alert alert-danger">
                            {{session('errMessage')}}
                        </div>
                    @endif
                    <form method="POST" action="{{route('postAdLogin')}}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Đăng nhập">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('public/admin-assets')}}/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('public/admin-assets')}}/js/bootstrap.min.js"></script>

</body>
</html>
