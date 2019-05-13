@extends('admin.adminLayout')

@push('additionalCSS')
    <!-- DataTables CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endpush

@push('title')
    Quản lý tài khoản
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row page-header">
                <div class="col-md-1">
                    <a href="{{url()->previous()}}" title="Quay về trang trước"><h1><i class="fa fa-arrow-left"></i></h1></a>
                </div>
                <div class="col-md-11">
                    <h1>Tài khoản</h1>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="javascript:void(0)" id="create-new-account" type="button" class="btn btn-success"><i
                        class="fa fa-plus"></i> Thêm tài khoản</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách tài khoản
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="accounts-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Họ</th>
                                <th>Tên</th>
                                <th>Quyền</th>
                                <th>Ngày tham gia</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="modal fade" id="account-modal" aria-hidden="true">
        <div class="modal-dialog">
            <form id="accountForm" name="accountForm" class="form-horizontal">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="account-modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="account_id" id="account_id">
                        <div class="form-group">
                            <label for="account-email" class="col-sm-12">Email (<span style="color:red;">*</span>)
                                <span id="default-password">(Mật khẩu mặc định: 123456)</span>
                            </label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="account-email" name="account-email"
                                       value=""
                                       maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="account-lname" class="col-sm-12">Họ</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="account-lname" name="account-lname"
                                               value=""
                                               maxlength="50">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="account-fname" class="col-sm-12">Tên (<span style="color:red;">*</span>)</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="account-fname" name="account-fname"
                                               value=""
                                               maxlength="50" required="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="account-role" class="col-sm-12">Quyền</label>
                            <div class="col-sm-12">
                                <select name="account-role" id="account-role" class="form-control">
                                    <option value="1">1 - Thành viên</option>
                                    <option value="2">2 - Biên tập</option>
                                    <option value="3">3 - Quản trị</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="account-gender" class="col-sm-12">Giới tính</label>
                            <div class="col-sm-12">
                                <select name="account-gender" id="account-gender" class="form-control">
                                    <option value="1">Nam</option>
                                    <option value="2">Nữ</option>
                                    <option value="3">Không xác định</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-7">
                                    <label for="account-wplace" class="col-sm-12">Nơi làm việc</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="account-wplace"
                                               name="account-wplace"
                                               value=""
                                               maxlength="50">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <label for="account-phone" class="col-sm-12">Điện thoại</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="account-phone" name="account-phone"
                                               value=""
                                               maxlength="50">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="account-address" class="col-sm-12">Địa chỉ</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="account-address" name="account-address"
                                       value=""
                                       maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn-save" name="btn-save" class="btn btn-success center-block">Lưu
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('additionalJS')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#accounts-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('accountsTable') !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'AccountID'},
                    {data: 'Email'},
                    {data: 'LastName'},
                    {data: 'FirstName'},
                    {data: 'Role'},
                    {data: 'JoinDate'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        // Create new account button
        $('#create-new-account').click(function () {
            $('#default-password').show();
            $('#account_id').val('');
            $('#accountForm').trigger("reset");
            $('#account-modal-title').html("Thêm tài khoản mới");
            $('#account-modal').modal('show');
        });

        // Edit button
        $('body').on('click', '#edit', function () {
            let accountID = $(this).data("id");
            $('#default-password').hide();
            $('#account-modal').modal('show');
            $('#accountForm').attr({
                action: '{!! url('tn-admin-th/accounts/edit') !!}' + '/' + accountID,
                method: "POST"
            });
            $('#account-modal-title').html("Sửa thông tin tài khoản");
            $('#account_id').val(accountID);
            $.ajax({
                type: "get",
                url: '{!! url('tn-admin-th/accounts/edit') !!}' + '/' + accountID,
                success: function (data) {
                    $('#account-email').val(data.Email);
                    $('#account-lname').val(data.LastName);
                    $('#account-fname').val(data.FirstName);
                    $('#account-role').val(data.Role);
                    $('#account-gender').val(data.Gender);
                    $('#account-wplace').val(data.WorkPlace);
                    $('#account-phone').val(data.PhoneNumber);
                    $('#account-address').val(data.Address);
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });

        //Delete button
        $('body').on('click', '#delete', function () {
            let accountID = $(this).data("id");
            if (confirm('Bạn có chắc muốn xóa tài khoản ' + accountID + ' ?') === true)
                $.ajax({
                    type: "get",
                    url: '{!! url('tn-admin-th/accounts/delete') !!}' + '/' + accountID,
                    success: function (data) {
                        let oTable = $('#accounts-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });
        });

        // Save button
        $('#accountForm').validate({
            submitHandler: function (form) {
                $('#btn-save').html('Loading..');
                $.ajax({
                    data: $('#accountForm').serialize(),
                    type: "post",
                    url: '{!! url('tn-admin-th/accounts/store') !!}',
                    dataType: 'json',
                    success: function (data) {
                        if(data.status===0) {
                            alert(data.message);
                            $('#btn-save').html('Lưu');
                        } else {
                            $('#accountForm').trigger('reset');
                            $('#account-modal').modal('hide');
                            $('#btn-save').html('Lưu');
                            let oTable = $('#accounts-table').dataTable();
                            oTable.fnDraw(false);
                        }
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                        $('#btn-save').html('Lưu');
                    }
                });
            }
        });
    </script>
    <!-- DataTables JavaScript -->
    <script src="{{asset('public/admin-assets')}}/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/admin-assets')}}/js/dataTables/dataTables.bootstrap.min.js"></script>

@endpush
