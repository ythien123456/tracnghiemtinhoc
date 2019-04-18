<table class="table table-responsive" style="margin: 10px auto;">
    <tr>
        <td><i class="fa fa-envelope"></i> <label>Email:</label></td>
        <td colspan="3">{{$infos->Email}}</td>
    </tr>
    <tr>
        <td><i class="fa fa-user-plus"></i> <label>Họ:</label></td>
        <td>{{$infos->LastName}}</td>
        <td><i class="fa fa-user"></i> <label>Tên:</label></td>
        <td>{{$infos->FirstName}}</td>
    </tr>
    <tr>
        <td><i class="fa fa-heart"></i> <label>Giới tính:</label></td>
        <td colspan="3">{{$infos->Gender}}</td>
    </tr>
    <tr>
        <td><i class="fa fa-archive"></i> <label>Nơi làm việc:</label></td>
        <td>{{$infos->WorkPlace}}</td>
        <td><i class="fa fa-mobile-phone"></i> <label>Số điện thoại:</label></td>
        <td>{{$infos->PhoneNumber}}</td>
    </tr>
    <tr>
        <td><i class="fa fa-home"></i> <label>Địa chỉ:</label></td>
        <td colspan="3">{{$infos->Address}}</td>
    </tr>
    <tr>
        <td><i class="fa fa-dashboard"></i> <label>Ngày tham gia:</label></td>
        <td colspan="3">{{date('d - m - Y',strtotime($infos->JoinDate))}}</td>
    </tr>
</table>