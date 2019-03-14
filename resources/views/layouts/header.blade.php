<header id="header">
    <div class="container">
        <div class="row headerContent">
            <div class="col-md-4 headerLeft">
                <img src="{!! asset('public/images/logo.png') !!}" height="170px">
            </div>
            <div class="col-md-4 headerMid">
                <img src="https://rajshahirsomoy.com/wp-content/uploads/2017/12/YourAdHere2.png" width="100%">
                <p>Tham gia vào chiến dịch Tôi đi tìm tôi ngay!!! </p>
            </div>
            <div class="col-md-4 headerRight text-center">
                @if(!Session::has('Email'))
                    <br>
                    <a href="{{url('/login')}}">
                        <button class="btn btn-primary">⛄ Đăng nhập</button>
                    </a>
                    <a href="{{url('/register')}}">
                        <button class="btn btn-danger">✍ Đăng ký</button>
                    </a>
                @else
                    @include('layouts.loggedInHeader')
                @endif
            </div>
        </div>
    </div>
</header>