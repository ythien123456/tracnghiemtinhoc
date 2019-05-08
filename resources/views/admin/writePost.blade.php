@extends('admin.adminLayout')

@push('title')
    Thêm bài viết
@endpush

@push('additionalCSS')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" type="text/css">
    <link rel="stylesheet" href="{!! asset('public') !!}/trumbowyg/dist/ui/trumbowyg.min.css">
    <!-- Import color plugin specific stylesheet -->
    <link rel="stylesheet" href="{!! asset('public') !!}/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css">
@endpush

@section('content')
    <form method="POST" id="postForm">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Thêm bài viết mới</h3>
                <input class="page-header form-control text-center" type="text" id="post-title" name="post-title"
                       required="" style="font-size: xx-large; font-weight: bold; height:60px;">
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid">
                    <div class="col-md-9">
                    <textarea id="post-content" name="post-content" rows="25" required="">

                    </textarea>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default" style="margin-top: 16px;">
                            <div class="panel-heading">
                                Thông tin
                            </div>
                            <div class="panel-body">
                                <p><i class="fa fa-pencil"></i> Người đăng: {{session('AdminID')}}</p>
                                <input type="hidden" id="post-author" name="post-author" value="{{session('AdminID')}}">
                                <p class="form-inline"><i class="fa fa-question"></i> Danh mục:
                                    <select class="form-control" id="post-category" name="post-category">
                                        <option value="1">1 - CNTT</option>
                                        <option value="2">2 - Hệ điều hành</option>
                                        <option value="3">3 - Internet</option>
                                        <option value="4">4 - Word</option>
                                        <option value="5">5 - Excel</option>
                                        <option value="6">6 - Powerpoint</option>
                                        <option value="7">7 - Hướng dẫn</option>
                                        <option value="8">8 - Tin tức</option>
                                        <option value="9">9 - Kiến thức tổng hop</option>
                                    </select>
                                </p>
                                <p class="form-inline"><i class="fa fa-unlock"></i> Trạng thái:
                                    <select class="form-control" id="post-status" name="post-status">
                                        <option value="1">Mở</option>
                                        <option value="0" selected>Đóng</option>
                                    </select>
                                </p>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Hành động
                            </div>
                            <div class="panel-body">
                                <button type="button" class="btn btn-success" id="btn-save">Lưu bài viết</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $('#btn-save').click(function () {
            let formData = $('#postForm').serialize();
            $.ajax({
                data: formData,
                url: '{!! route('createPost') !!}',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    alert(data.message);
                    window.location.href = '{!! url('tn-admin-th/posts/view') !!}' + '/' + data.PostID;
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });
    </script>
@endsection

@push('additionalJS')
    <!-- Import Trumbowyg -->
    <script src="{!! asset('public') !!}/trumbowyg/dist/trumbowyg.min.js"></script>
    <!-- Import dependency for Resizimg   -->
    <script src="{!! asset('public') !!}/trumbowyg/dist/plugins/resizimg/jquery-resizable.min.js"></script>
    <!-- Import Trumbowyg plugins... -->
    <script src="{!! asset('public') !!}/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js"></script>
    <script src="{!! asset('public') !!}/trumbowyg/dist/plugins/base64/trumbowyg.base64.js"></script>
    <script src="{!! asset('public') !!}/trumbowyg/dist/plugins/colors/trumbowyg.colors.js"></script>
    <script src="{!! asset('public') !!}/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.js"></script>
    <script src="{!! asset('public') !!}/trumbowyg/dist/plugins/history/trumbowyg.history.js"></script>
    <script type="text/javascript" src="{!! asset('public') !!}/trumbowyg/js/langs/vi.min.js"></script>
    <!-- Init Trumbowyg -->
    <script>
        $(document).ready(function () {
            $.trumbowyg.svgPath = '{!! asset('public') !!}/trumbowyg/dist/ui/icons.svg';
        });
    </script>
    <script src="{!! asset('public') !!}/trumbowyg/js/main.js"></script>
@endpush