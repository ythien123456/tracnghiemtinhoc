@extends('admin.adminLayout')

@push('title')
    {{$post->PostTitle}}
@endpush

@push('additionalCSS')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" type="text/css">
    <link rel="stylesheet" href="{!! asset('public') !!}/trumbowyg/dist/ui/trumbowyg.min.css">
    <!-- Import color plugin specific stylesheet -->
    <link rel="stylesheet" href="{!! asset('public') !!}/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css">
@endpush

@section('content')
    <form method="POST" id="postForm">
        {{csrf_field()}}
        <div class="row">
            <div class="col-lg-12">
                <input class="page-header form-control text-center" type="text" id="post-title" name="post-title"
                       value="{{$post->PostTitle}}" style="font-size: xx-large; font-weight: bold; height:60px;">
                <input type="hidden" id="post-id" name="post-id" value="{{$post->PostID}}">
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid">
                    <div class="col-md-9">
                    <textarea id="post-content" name="post-content" rows="25">
                        {!! $post->PostContent !!}
                    </textarea>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default" style="margin-top: 16px;">
                            <div class="panel-heading">
                                Thông tin
                            </div>
                            <div class="panel-body">
                                <p><i class="fa fa-pencil"></i> ID Người đăng: {{$post->AccountID}}</p>
                                <input type="hidden" id="post-author" name="post-author" value="{{$post->AccountID}}">
                                <p class="form-inline"><i class="fa fa-question"></i> Danh mục:
                                    <select class="form-control" id="post-category" name="post-category">
                                        <option value="1" {{$post->CategoryID==1 ? 'selected' : ''}}>1 - CNTT</option>
                                        <option value="2" {{$post->CategoryID==2 ? 'selected' : ''}}>2 - Hệ điều hành
                                        </option>
                                        <option value="3" {{$post->CategoryID==3 ? 'selected' : ''}}>3 - Internet</option>
                                        <option value="4" {{$post->CategoryID==4 ? 'selected' : ''}}>4 - Word</option>
                                        <option value="5" {{$post->CategoryID==5 ? 'selected' : ''}}>5 - Excel</option>
                                        <option value="6" {{$post->CategoryID==6 ? 'selected' : ''}}>6 - Powerpoint
                                        </option>
                                        <option value="7" {{$post->CategoryID==7 ? 'selected' : ''}}>7 - Hướng dẫn
                                        </option>
                                        <option value="8" {{$post->CategoryID==8 ? 'selected' : ''}}>8 - Tin tức</option>
                                        <option value="9" {{$post->CategoryID==9 ? 'selected' : ''}}>9 - Kiến thức tổng hợp</option>
                                    </select>
                                </p>
                                <p><i class="fa fa-eye"></i> Lượt xem: {{$post->Views}}</p>
                                <p class="form-inline"><i class="fa fa-unlock"></i> Trạng thái:
                                    <select class="form-control" id="post-status" name="post-status">
                                        <option value="1" {{$post->Status==1 ? 'selected' : ''}}>Mở</option>
                                        <option value="0" {{$post->Status==0 ? 'selected' : ''}}>Đóng</option>
                                    </select>
                                </p>
                                <p><i class="fa fa-calendar"></i> Ngày đăng: {{$post->PostDate}}</p>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Hành động
                            </div>
                            <div class="panel-body">
                                <button type="button" class="btn btn-success" id="btn-save">
                                    <i class="fa fa-save"></i> Lưu
                                </button>
                                <a href="{{route('postsviewSinglePost',['postSlug' => $post->PostSlug])}}"
                                   target="_blank" class="btn btn-info">
                                    <i class="fa fa-eye"></i> Xem
                                </a>
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
            if($('#post-title').val()==='' || $('#post-content').val()==='') {
                alert('Tiêu đề và nội dung không được để trống!');
                return;
            }
            $.ajax({
                data: formData,
                url: '{!! route('editPost') !!}',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    var noti = bootbox.dialog({
                        message: '<h3><i class="fa fa-spin fa-spinner"></i> ' + data.message + '</h3>'
                    });
                    noti.init(function () {
                        setTimeout(function () {
                            noti.fadeOut();
                        }, 500);
                    });
                },
                error: function (data) {
                    alert('Lỗi: ' +
                        '- Có thể tên bài viết bị trùng');
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