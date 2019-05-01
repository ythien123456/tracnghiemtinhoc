@extends('admin.adminLayout')

@push('title')
    {{$post->PostTitle}}
@endpush

@push('active-quan-ly')
    active
@endpush

@push('additionalCSS')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" type="text/css">
    <link rel="stylesheet" href="{!! asset('public') !!}/trumbowyg/dist/ui/trumbowyg.min.css">
    <!-- Import color plugin specific stylesheet -->
    <link rel="stylesheet" href="{!! asset('public') !!}/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.css">
@endpush

@section('content')
    <form method="POST" id="postForm">
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
                                <p><i class="fa fa-pencil"></i> Người đăng: {{$post->AccountID}}</p>
                                <input type="hidden" id="post-author" name="post-author" value="{{$post->AccountID}}">
                                <p class="form-inline"><i class="fa fa-question"></i> Module:
                                    <select class="form-control" id="post-module" name="post-module">
                                        <option value="1" {{$post->ModuleID==1 ? 'selected' : ''}}>1 - CNTT</option>
                                        <option value="2" {{$post->ModuleID==2 ? 'selected' : ''}}>2 - Hệ điều hành
                                        </option>
                                        <option value="3" {{$post->ModuleID==3 ? 'selected' : ''}}>3 - Internet</option>
                                        <option value="4" {{$post->ModuleID==4 ? 'selected' : ''}}>4 - Word</option>
                                        <option value="5" {{$post->ModuleID==5 ? 'selected' : ''}}>5 - Excel</option>
                                        <option value="6" {{$post->ModuleID==6 ? 'selected' : ''}}>6 - Powerpoint
                                        </option>
                                        <option value="7" {{$post->ModuleID==7 ? 'selected' : ''}}>7 - Hướng dẫn
                                        </option>
                                        <option value="8" {{$post->ModuleID==8 ? 'selected' : ''}}>8 - Tin tức</option>
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
                url: '{!! route('editPost') !!}',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    alert(data.message);
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