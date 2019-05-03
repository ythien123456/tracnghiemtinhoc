@extends('editor.editorLayout')

@push('title')
    {{$exam->ExamTitle}} - Soạn đề thủ công
@endpush

@push('active-quan-ly')
    active
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm câu hỏi cho
                <a href="{{route('viewExam',['ExamID' => $exam->ExamID])}}">"{{$exam->ExamTitle}}"</a>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Số lượng câu hỏi mỗi module</h3>
            <div class="row">
                <div class="col-md-2">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            CNTT
                        </div>
                        <div class="panel-body">
                            <span id="cntt-qcount">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            HĐH
                        </div>
                        <div class="panel-body">
                            <span id="hdh-qcount">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            Internet
                        </div>
                        <div class="panel-body">
                            <span id="internet-qcount">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            Word
                        </div>
                        <div class="panel-body">
                            <span id="word-qcount">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            Excel
                        </div>
                        <div class="panel-body">
                            <span id="excel-qcount">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            Powerpoint
                        </div>
                        <div class="panel-body">
                            <span id="powerpoint-qcount">0</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Số câu: {{$exam->TotalQuestions}} - Thời gian: {{$exam->TimeLimit}}m</h4>
                    <h4>Số câu đang có: <span id="sum-qcount">0</span></h4>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="questions-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nội dung</th>
                                {!! $exam->ExamType<3 ? '<th>Module</th>' : '' !!}
                                <th>Loại</th>
                                <th>Ngày tạo</th>
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
    <div class="modal fade" id="question-modal" aria-hidden="true">
        <div class="modal-dialog" style="width:70%;">
            <form id="questionForm" name="questionForm" class="form-horizontal">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="question-modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="question_id" id="question_id">
                        <div class="form-group">
                            <label for="question-content" class="col-sm-12">Nội dung</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="question-content" name="question-content"
                                          value="" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="exam-type">Module</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="question-module" name="question-module">
                                    <option value="1">1 - CNTT</option>
                                    <option value="2">2 - Hệ điều hành</option>
                                    <option value="3">3 - Internet</option>
                                    <option value="4">4 - Word</option>
                                    <option value="5">5 - Excel</option>
                                    <option value="6">6 - Powerpoint</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="question-type">Loại câu hỏi</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="question-type" name="question-type">
                                    <option value="1">Một đáp án</option>
                                    <option value="2">Nhiều đáp án</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="exam-time-limit">Lựa chọn (tick vào đáp án đúng)</label>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="text-center">A. <input type="radio" value="A" name="correct-answer">
                                        </p>
                                        <input type="text" id="answer-A" name="answer-A" class="form-control" value="">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-center">B. <input type="radio" value="B" name="correct-answer">
                                        </p>
                                        <input type="text" id="answer-B" name="answer-B" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="text-center">C. <input type="radio" value="C" name="correct-answer">
                                        </p>
                                        <input type="text" id="answer-C" name="answer-C" class="form-control" value="">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-center">D. <input type="radio" value="D" name="correct-answer">
                                        </p>
                                        <input type="text" id="answer-D" name="answer-D" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="question-explain" class="col-sm-12">Giải thích đáp án</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="question-explain" name="question-explain"
                                          value=""></textarea>
                            </div>
                        </div>
                    </div>
                    {{--                <div class="modal-footer">--}}
                    {{--                    <div class="text-center">--}}
                    {{--                        <button type="submit" id="btn-save" name="btn-save" class="btn btn-success">Lưu--}}
                    {{--                        </button>--}}
                    {{--                        <button type="button" id="btn-switch-mass-create" name="btn-switch-mass-create"--}}
                    {{--                                class="btn btn-danger">Thêm liên tục: Đang <span class="mass-create-status">TẮT</span>--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </form>
        </div>
    </div>
@endsection

@push('additionalJS')
    <script>
        function moduleQuestionsCount() {
            $.ajax({
                url: '{!! route('countQuestionsInModule',['ExamID' => $exam->ExamID]) !!}',
                type: 'get',
                success: function (data) {
                    $('#cntt-qcount').html(data.module1);
                    $('#hdh-qcount').html(data.module2);
                    $('#internet-qcount').html(data.module3);
                    $('#word-qcount').html(data.module4);
                    $('#excel-qcount').html(data.module5);
                    $('#powerpoint-qcount').html(data.module6);
                    let sum = data.module1 + data.module2 + data.module3 + data.module4 + data.module5 + data.module6;
                    $('#sum-qcount').html(sum);
                },
                error: function (data) {
                    console.log('Error', data);
                }
            });
        }

        $(document).ready(function () {
            moduleQuestionsCount();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#questions-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('manualComposeQuestions',['ExamID' => $exam->ExamID]) !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'QuestionID'},
                    {data: 'QuestionContent'},
                        {!! $exam->ExamType<3 ? "{data: 'ModuleID'}," : "" !!}
                    {data: 'QuestionType'},
                    {data: 'DateCreated'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        //edit question button
        $('body').on('click', '#edit', function () {
            let questionID = $(this).data("id");
            $('#btn-switch-mass-create').hide();
            $('#question-modal').modal('show');
            $('#questionFormCreate').attr({
                id: 'questionFormEdit',
                name: 'questionFormEdit',
                action: '{!! url('tn-admin-th/questions/edit') !!}' + '/' + questionID,
                method: "POST"
            });
            $('#question-modal-title').html("Sửa câu hỏi");
            $('#question_id').val(questionID);
            $.ajax({
                type: "get",
                url: '{!! url('tn-admin-th/questions/edit') !!}' + '/' + questionID,
                success: function (data) {
                    $('#question-content').val(data.QuestionContent);
                    $('#question-module').val(data.ModuleID);
                    $('#question-type').val(data.QuestionType);
                    $('#answer-A').val(data.A);
                    $('#answer-B').val(data.B);
                    $('#answer-C').val(data.C);
                    $('#answer-D').val(data.D);
                    if (data.QuestionType === 1) {
                        $('input:checkbox').prop('type', 'radio');
                        let index = 0;
                        if (data.CorrectAnswers.length === 1) {
                            data.CorrectAnswers === 'A' ? index = 0 : '';
                            data.CorrectAnswers === 'B' ? index = 1 : '';
                            data.CorrectAnswers === 'C' ? index = 2 : '';
                            data.CorrectAnswers === 'D' ? index = 3 : '';
                            let radio = document.getElementsByName('correct-answer')[index];
                            radio.checked = true;
                        }
                    } else {
                        $('input:radio').prop('type', 'checkbox');
                        let answerArr = data.CorrectAnswers.split(',');
                        let checkbox = document.getElementsByName('correct-answer');
                        for (let i = 0; i < checkbox.length; i++)
                            checkbox[i].checked = false;
                        $.each(answerArr, function (index, value) {
                            let id = 0;
                            value === 'A' ? id = 0 : '';
                            value === 'B' ? id = 1 : '';
                            value === 'C' ? id = 2 : '';
                            value === 'D' ? id = 3 : '';
                            checkbox = document.getElementsByName('correct-answer')[id];
                            checkbox.checked = true;
                        });
                    }
                    $('#question-explain').val(data.AnswerExplain);
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });

        //add question button
        $('body').on('click', '#add', function () {
            let cnttCount = parseInt($('#cntt-qcount').html());
            let hdhCount = parseInt($('#hdh-qcount').html());
            let internetCount = parseInt($('#internet-qcount').html());
            let wordCount = parseInt($('#word-qcount').html());
            let excelCount = parseInt($('#excel-qcount').html());
            let powerPointCount = parseInt($('#powerpoint-qcount').html());
            let sumCount = cnttCount + hdhCount + internetCount + wordCount + excelCount + powerPointCount;
            if (sumCount >= {!! $exam->TotalQuestions !!}) {
                alert('Đã đủ số lượng {!! $exam->TotalQuestions !!} câu hỏi!');
                return false;
            } else {
                let questionID = $(this).data('id');
                $.ajax({
                    url: '{!! url('tn-admin-th') !!}' + '/exams/' + {!! $exam->ExamID !!} +
                        '/compose/addQuestion/' + questionID,
                    type: 'get',
                    success: function (data) {
                        moduleQuestionsCount();
                        let oTable = $('#questions-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        alert('Câu này đã có trong đề thi!');
                        console.log('Error: ', data);
                    },
                });
            }
        });

        //remove question button
        $('body').on('click', '#delete', function () {
            let questionID = $(this).data('id');
            $.ajax({
                url: '{!! url('tn-admin-th/exams') !!}' + '/' + '{{$exam->ExamID}}' + '/remove/' + questionID,
                type: 'get',
                success: function (data) {
                    moduleQuestionsCount();
                    let oTable = $('#questions-table').dataTable();
                    oTable.fnDraw(false);
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });
    </script>
@endpush
