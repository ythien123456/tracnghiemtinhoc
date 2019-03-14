<p>Xin chào: {!! Session::get('FirstName').' '.Session::get('LastName') !!}</p>
<p>{!! Session::get('Email').' '.Session::get('Role') !!}</p>
<a href="logout">
    <button class="btn btn-danger">✍ Đăng Xuất</button>
</a>