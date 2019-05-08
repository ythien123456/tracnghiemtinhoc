@extends('admin.adminLayout')

@push('additionalCSS')
    <!-- DataTables CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endpush

@push('title')
    Quản lý module
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
                    <h1>Module</h1>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="javascript:void(0)" id="create-new-module" type="button" class="btn btn-success"><i
                        class="fa fa-plus"></i> Thêm module</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách module
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="modules-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên module</th>
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
    <div class="modal fade" id="module-modal" aria-hidden="true">
        <div class="modal-dialog">
            <form id="moduleForm" name="moduleForm" class="form-horizontal">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="module-modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="module_id" id="module_id">
                        <div class="form-group">
                            <label for="module-name" class="col-sm-12">Tên module</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="module-name" name="module-name"
                                       value=""
                                       maxlength="100" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="module-name" class="col-sm-12">Mô tả</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="module-description" name="module-description"></textarea>
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
            $('#modules-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('modulesTable') !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'ModuleID'},
                    {data: 'ModuleName'},
                    {data: 'ModuleDescription'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        // Create new module button
        $('#create-new-module').click(function () {
            $('#module_id').val('');
            $('#moduleForm').trigger("reset");
            $('#module-modal-title').html("Thêm module mới");
            $('#module-modal').modal('show');
        });

        // Edit button
        $('body').on('click', '#edit', function () {
            let moduleID = $(this).data("id");
            $('#module-modal').modal('show');
            $('#module-modal-title').html("Sửa thông tin module");
            $('#module_id').val(moduleID);
            $.ajax({
                type: "get",
                url: '{!! url('tn-admin-th/modules/edit') !!}' + '/' + moduleID,
                success: function (data) {
                    $('#module-name').val(data.ModuleName);
                    $('#module-description').val(data.ModuleDescription)
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });

        // Save button
        $('#moduleForm').validate({
            submitHandler: function (form) {
                $('#btn-save').html('Loading..');
                $.ajax({
                    data: $('#moduleForm').serialize(),
                    type: "post",
                    url: '{!! url('tn-admin-th/modules/store') !!}',
                    dataType: 'json',
                    success: function (data) {
                        $('#moduleForm').trigger('reset');
                        $('#module-modal').modal('hide');
                        $('#btn-save').html('Lưu');
                        let oTable = $('#modules-table').dataTable();
                        oTable.fnDraw(false);
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
