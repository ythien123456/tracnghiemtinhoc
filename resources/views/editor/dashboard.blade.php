@extends('editor.editorLayout')

@push('title')
    Trang chính
@endpush

@push('additionalCSS')
    <!-- Morris Charts CSS -->
    <link href="{{asset('public/admin-assets/css/morris.css')}}" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-paragraph fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$totalPosts}}</div>
                            <div>Bài viết</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('tn-admin-th/posts')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-newspaper-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$totalExams}}</div>
                            <div>Đề thi</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('tn-admin-th/exams')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-question-circle fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$totalQuestions}}</div>
                            <div>Câu hỏi</div>
                        </div>
                    </div>
                </div>
                <a href="{{url('tn-admin-th/questions')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-pencil-square fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$totalScores}}</div>
                            <div>Lượt thi</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-pie-chart fa-fw"></i> Thống kê ngân hàng câu hỏi
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="questions-bank-chart"></div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-pie-chart fa-fw"></i> 5 bài làm mới nhất
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table class="table table-striped table-hover table-responsive">
                        <tr>
                            <td><strong>Mã bài làm</strong></td>
                            <td><strong>ID - Tên người làm</strong></td>
                            <td><strong>Tên đề</strong></td>
                            <td><strong>Số câu trong đề</strong></td>
                            <td><strong>Số câu đúng</strong></td>
                            <td><strong>Ngày thực hiện</strong></td>
                        </tr>
                        <tbody>
                        @foreach($fiveNewScores as $score)
                            <tr>
                                <td>{{$score->ScoreID}}</td>
                                <td>{{$score->AccountID}} - {{$score->LastName.' '.$score->FirstName}}</td>
                                <td>
                                    <a href="{{route('viewExam',['ExamID' => $score->ExamID])}}">{{$score->ExamTitle}}</a>
                                </td>
                                <td>{{$score->TotalQuestions}}</td>
                                <td>{{$score->Score}}</td>
                                <td>{{$score->Date}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-paragraph fa-fw"></i> Các Bài Viết Mới Nhất
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        @foreach($eightNewPosts as $post)
                            <a href="{{route('viewPost',['PostID' => $post->PostID])}}" class="list-group-item"
                               title="{{$post->PostTitle}}">
                                <i class="fa fa-arrow-left fa-fw"></i> {{mb_strimwidth($post->PostTitle,0,30,'...')}}
                                <span class="pull-right text-muted small"><em>{{date('d-m-Y',strtotime($post->PostDate))}}</em></span>
                            </a>
                        @endforeach
                    </div>
                    <!-- /.list-group -->
                    <a href="{{url('tn-admin-th/posts')}}" class="btn btn-default btn-block">Xem tất cả bài viết</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
@endsection

@push('additionalJS')
    <script src="{{asset('public/admin-assets/js/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/admin-assets/js/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('public/admin-assets/js/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('public/admin-assets/js/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('public/admin-assets/js/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            var data = [
                {
                    label: "{{$totalQuestionsModule1}} Câu - CNTT",
                    data: {{$totalQuestionsModule1}}
                },
                {
                    label: "{{$totalQuestionsModule2}} Câu - Hệ điều hành",
                    data: {{$totalQuestionsModule2}}
                },
                {
                    label: "{{$totalQuestionsModule3}} Câu - Internet",
                    data: {{$totalQuestionsModule3}}
                },
                {
                    label: "{{$totalQuestionsModule4}} Câu - Word",
                    data: {{$totalQuestionsModule4}}
                },
                {
                    label: "{{$totalQuestionsModule5}} Câu - Excel",
                    data: {{$totalQuestionsModule5}}
                },
                {
                    label: "{{$totalQuestionsModule6}} Câu - Powerpoint",
                    data: {{$totalQuestionsModule6}}
                },

            ];
            var plotObj = $.plot($("#questions-bank-chart"), data, {
                series: {
                    pie: {
                        show: true
                    }
                },
                grid: {
                    hoverable: true
                },
                tooltip: true,
                tooltipOpts: {
                    content: "%p.0%", // show percentages, rounding to 2 decimal places
                    shifts: {
                        x: 20,
                        y: 0
                    },
                    defaultTheme: false
                }
            });
        });
    </script>
@endpush