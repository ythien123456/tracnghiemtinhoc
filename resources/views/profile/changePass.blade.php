@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
@if(session('errorMessage'))
    <div class="alert alert-danger">
        {{session('errorMessage')}}
    </div>
@endif
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <div style="width: 90%; margin: 0 auto;">
        <form method="POST" action="submitChangePassword">
            {{csrf_field()}}
            <div class="form-group col-sm-12">
                <label class="col-md-4"><i class="fa fa-unlock"></i> Mật khẩu hiện tại</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="CurrentPassword" value="">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-md-4"><i class="fa fa-lock"></i> Mật khẩu mới</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="NewPassword" value="">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-md-4"><i class="fa fa-lock"></i> Xác nhận mật khẩu mới</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="NewPasswordConfirm" value="">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <input type="submit" class="btn btn-primary center-block" value="Hoàn tất">
            </div>
        </form>
    </div>
</div>