@extends('admin.adminLayout')

@push('additionalCSS')
    <!-- DataTables CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endpush

@push('title')
    Quản lý quyền hạn
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row page-header">
                <div class="col-md-1">
                    <a href="{{url()->previous()}}" title="Quay về trang trước"><h1><i class="fa fa-arrow-left"></i>
                        </h1></a>
                </div>
                <div class="col-md-11">
                    <h1>Quyền</h1>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="javascript:void(0)" id="create-new-role" type="button" class="btn btn-success"><i
                        class="fa fa-plus"></i> Thêm quyền</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách quyền
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="roles-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Mô tả</th>
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
    <div class="modal fade" id="role-modal" aria-hidden="true">
        <div class="modal-dialog">
            <form id="roleForm" name="roleForm" class="form-horizontal">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="role-modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="role_id" id="role_id">
                        <div class="form-group">
                            <label for="role-title" class="col-sm-12">Tên quyền</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="role-title" name="role-title"
                                       value=""
                                       maxlength="100" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role-description" class="col-sm-12">Mô tả</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="role-description" name="role-description"
                                       value=""
                                       maxlength="255">
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
            $('#roles-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('rolesTable') !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'RoleID'},
                    {data: 'RoleTitle'},
                    {data: 'RoleDescription'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        // Create new account button
        $('#create-new-role').click(function () {
            $('#role_id').val('');
            $('#roleForm').trigger("reset");
            $('#role-modal-title').html("Thêm quyền mới");
            $('#role-modal').modal('show');
        });

        // Edit button
        $('body').on('click', '#edit', function () {
            let roleID = $(this).data("id");
            $('#default-password').hide();
            $('#role-modal').modal('show');
            $('#role-modal-title').html("Sửa quyền");
            $('#role_id').val(roleID);
            $.ajax({
                type: "get",
                url: '{!! url('tn-admin-th/roles/edit') !!}' + '/' + roleID,
                success: function (data) {
                    $('#role_id').val(data.RoleID);
                    $('#role-title').val(data.RoleTitle);
                    $('#role-description').val(data.RoleDescription);
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });

        // Save button
        $('#roleForm').validate({
            submitHandler: function (form) {
                $('#btn-save').html('Loading..');
                $.ajax({
                    data: $('#roleForm').serialize(),
                    type: "post",
                    url: '{!! route('storeRole') !!}',
                    dataType: 'json',
                    success: function (data) {
                        if(data.status!==0) {
                            $('#roleForm').trigger('reset');
                            $('#role-modal').modal('hide');
                            $('#btn-save').html('Lưu');
                            let oTable = $('#roles-table').dataTable();
                            oTable.fnDraw(false);
                        } else {
                            alert(data.message);
                            $('#btn-save').html('Lưu');
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
