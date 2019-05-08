@extends('admin.adminLayout')

@push('additionalCSS')
    <!-- DataTables CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endpush

@push('title')
    Quản lý danh mục
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row page-header">
                <div class="col-md-1">
                    <a href="{{url()->previous()}}" title="Quay về trang trước"><h1><i class="fa fa-arrow-left"></i></h1></a>
                </div>
                <div class="col-md-11">
                    <h1>Danh mục</h1>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="javascript:void(0)" id="create-new-account" type="button" class="btn btn-success"><i
                        class="fa fa-plus"></i> Thêm danh mục</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách danh mục
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="categories-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
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
    <div class="modal fade" id="category-modal" aria-hidden="true">
        <div class="modal-dialog">
            <form id="categoryForm" name="categoryForm" class="form-horizontal">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="category-modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="category_id" id="category_id">
                        <div class="form-group">
                            <label for="category-name" class="col-sm-12">Tên</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="category-name" name="category-name"
                                       value=""
                                       maxlength="100" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category-description" class="col-sm-12">Mô tả</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="category-description" name="category-description"></textarea>
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
            $('#categories-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('categoriesTable') !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'CategoryID'},
                    {data: 'CategoryName'},
                    {data: 'CategoryDescription'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        // Create new account button
        $('#create-new-account').click(function () {
            $('#category_id').val('');
            $('#categoryForm').trigger("reset");
            $('#category-modal-title').html("Thêm danh mục mới");
            $('#category-modal').modal('show');
        });

        // Edit button
        $('body').on('click', '#edit', function () {
            let categoryID = $(this).data("id");
            $('#category-modal').modal('show');
            $('#category-modal-title').html("Sửa thông tin danh mục");
            $('#category_id').val(categoryID);
            $.ajax({
                type: "get",
                url: '{!! url('tn-admin-th/categories/edit') !!}' + '/' + categoryID,
                success: function (data) {
                    $('#category-name').val(data.CategoryName);
                    $('#category-description').val(data.CategoryDescription);
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });

        //Delete button
        $('body').on('click', '#delete', function () {
            let categoryID = $(this).data("id");
            if (confirm('Bạn có chắc muốn xóa tài khoản ' + categoryID + ' ?') === true)
                $.ajax({
                    type: "get",
                    url: '{!! url('tn-admin-th/categories/delete') !!}' + '/' + categoryID,
                    success: function (data) {
                        let oTable = $('#categories-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });
        });

        // Save button
        $('#categoryForm').validate({
            submitHandler: function (form) {
                $('#btn-save').html('Loading..');
                $.ajax({
                    data: $('#categoryForm').serialize(),
                    type: "post",
                    url: '{!! url('tn-admin-th/categories/store') !!}',
                    dataType: 'json',
                    success: function (data) {
                        $('#categoryForm').trigger('reset');
                        $('#category-modal').modal('hide');
                        $('#btn-save').html('Lưu');
                        let oTable = $('#categories-table').dataTable();
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
