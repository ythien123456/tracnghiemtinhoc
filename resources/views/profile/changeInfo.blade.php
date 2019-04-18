@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
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
        <form method="POST" action="submitChangeInfo">
            {{csrf_field()}}
            <div class="form-group col-sm-12">
                <label class="col-md-3"><i class="fa fa-user"></i> Tên (*)</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="FirstName" value="{{$infos->FirstName}}"
                           placeholder="Tên">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-md-3"><i class="fa fa-user-plus"></i> Họ</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="LastName" value="{{$infos->LastName}}"
                           placeholder="Họ">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-md-3"><i class="fa fa-heart"></i> Giới tính</label>
                <div class="col-sm-9">
                    <select class="form-control" name="Gender">
                        <option value="1" {{$infos->Gender=='Nam' ? 'selected' : ''}}>Nam</option>
                        <option value="2" {{$infos->Gender=='Nữ' ? 'selected' : ''}}>Nữ</option>
                        <option value="3" {{$infos->Gender=='Không xác định' ? 'selected' : ''}}>Không xác định</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-md-3"><i class="fa fa-home"></i> Địa chỉ</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="Address" value="{{$infos->Address}}"
                           placeholder="Địa chỉ">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-md-3"><i class="fa fa-phone"></i> Số điện thoại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="PhoneNumber" value="{{$infos->PhoneNumber}}"
                           placeholder="Số điện thoại">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label class="col-md-3"><i class="fa fa-archive"></i> Nơi làm việc</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="WorkPlace" value="{{$infos->WorkPlace}}"
                           placeholder="Nơi làm việc">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <input type="submit" class="btn btn-primary center-block" value="Hoàn tất">
            </div>
        </form>
    </div>
</div>