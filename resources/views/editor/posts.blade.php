@extends('editor.editorLayout')

@push('additionalCSS')
    <!-- DataTables CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endpush

@push('title')
    Quản lý bài viết
@endpush

@push('active-quan-ly')
    active
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row page-header">
                <div class="col-md-1">
                    <a href="{{url()->previous()}}" title="Quay về trang trước"><h1><i class="fa fa-arrow-left"></i></h1></a>
                </div>
                <div class="col-md-11">
                    <h1>Bài viết</h1>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="{!! route('editorWritePost') !!}" class="btn btn-success"><i class="fa fa-plus"></i> Thêm bài viết</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách bài viết
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="posts-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Thể loại</th>
                                <th>Người viết</th>
                                <th>Trạng thái</th>
                                <th>Ngày đăng</th>
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
@endsection

@push('additionalJS')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#posts-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('editorPostsTable') !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'PostID'},
                    {data: 'title'},
                    {data: 'CategoryID'},
                    {data: 'AccountID'},
                    {data: 'status'},
                    {data: 'PostDate'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        $('body').on('click', '#delete', function () {
            let postID = $(this).data("id");
            if (confirm('Bạn muốn xóa bài viết ' + postID + ' ?') === true)
                $.ajax({
                    url: '{!! url('tn-admin-th/posts/delete') !!}' + '/' + postID,
                    type: "GET",
                    success: function (data) {
                        let oTable = $('#posts-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });
        });
    </script>
    <!-- DataTables JavaScript -->
    <script src="{{asset('public/admin-assets')}}/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/admin-assets')}}/js/dataTables/dataTables.bootstrap.min.js"></script>

@endpush
