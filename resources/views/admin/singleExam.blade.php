@extends('admin.adminLayout')

@push('additionalCSS')
    <!-- DataTables CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/admin-assets')}}/css/dataTables/dataTables.responsive.css" rel="stylesheet">
@endpush

@push('title')
    {{$examInfo->ExamTitle}}
@endpush

@push('active-quan-ly')
    active
@endpush
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$examInfo->ExamTitle}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-8">
                    <a href="javascript:void(0)" type="button" id="btn-edit-exam" class="btn btn-primary"><i
                                class="fa fa-edit"></i> Sửa thông tin đề</a> |
                    <a href="javascript:void(0)" type="button" id="btn-add-question" class="btn btn-success"
                       data-id="{{$examInfo->ExamType}}"><i
                                class="fa fa-plus"></i> Nhập thêm câu hỏi</a> |
                    <a href="{{route('examManualCompose',['ExamID' => $examInfo->ExamID])}}" class="btn btn-info">
                        <i class="fa fa-plus"></i> Soạn đề (thủ công)</a>
                    <a href="javascript:void(0)" class="btn btn-info" id="btn-compose-auto"
                       data-id="{{$examInfo->ExamType}}"><i class="fa fa-plus"></i>
                        Soạn đề (tự động)
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="javascript:void(0)" class="btn btn-danger" style="float:right;"
                       id="btn-delete-all-quesions"
                       title="Xóa tất cả câu hỏi trong đề này">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </div>
            </div>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Số câu: {{$examInfo->TotalQuestions}} - Thời gian: {{$examInfo->TimeLimit}}m </h4>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="questions-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nội dung</th>
                                <th>Module</th>
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
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="submit" id="btn-save" name="btn-save" class="btn btn-success">Lưu
                            </button>
                            <button type="button" id="btn-switch-mass-create" name="btn-switch-mass-create"
                                    class="btn btn-danger">Thêm liên tục: Đang <span
                                        class="mass-create-status">TẮT</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="exam-modal" aria-hidden="true">
        <div class="modal-dialog">
            <form id="examForm" name="examForm" class="form-horizontal">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exam-modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="exam_id" id="exam_id" value="{{$examInfo->ExamID}}">
                        <div class="form-group">
                            <label for="exam-title" class="col-sm-12">Tên đề thi</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="exam-title" name="exam-title" value=""
                                       maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exam-description" class="col-sm-12">Mô tả</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="exam-description" name="exam-description"
                                          value=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="exam-type">Loại đề thi</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="exam-type" name="exam-type">
                                    <option value="1">1 - Chuẩn</option>
                                    <option value="2">2 - Tổng hợp</option>
                                    <option value="3">3 - Internet</option>
                                    <option value="4">4 - Hệ điều hành</option>
                                    <option value="5">5 - CNTT</option>
                                    <option value="6">6 - Word</option>
                                    <option value="7">7 - Excel</option>
                                    <option value="8">8 - Powerpoint</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="exam-total-questions">Số câu</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="exam-total-questions" name="exam-total-questions">
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="60">60</option>
                                    <option value="80">80</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12" for="exam-time-limit">Thời gian</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="exam-time-limit" name="exam-time-limit">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="60">60</option>
                                    <option value="80">80</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Trạng thái</label>
                            <div class="col-sm-12">
                                <select class="form-control" id="exam-status" name="exam-status">
                                    <option value="0">Đóng</option>
                                    <option value="1">Mở</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn-save" name="btn-save-exam-info"
                                class="btn btn-success center-block">Lưu
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('additionalJS')
    <script>
        let mass_create_status = false;
        $(document).ready(function () {
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
                    url: '{!! route('singleExamTable',['ExamID' => $examInfo->ExamID]) !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'QuestionID'},
                    {data: 'QuestionContent'},
                    {data: 'ModuleID'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        //remove question from exam button
        $('body').on('click', '#delete', function () {
            let questionID = $(this).data('id');
            if (confirm('Xóa câu hỏi ' + questionID + ' ra khỏi đề thi này?') === true) {
                $.ajax({
                    url: '{!! url('tn-admin-th/exams') !!}' + '/' + '{{$examInfo->ExamID}}' + '/remove/' + questionID,
                    type: 'get',
                    success: function (data) {
                        let oTable = $('#questions-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });
            }
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

        // mass status switch
        $('#btn-switch-mass-create').click(function () {
            mass_create_status = mass_create_status === true ? false : true;
            btn = $('#btn-switch-mass-create');
            if (mass_create_status === true) {
                btn.removeClass('btn-danger');
                btn.addClass('btn-info');
                $('.mass-create-status').html('BẬT');
            } else {
                btn.removeClass('btn-info');
                btn.addClass('btn-danger');
                $('.mass-create-status').html('TẮT');
            }
        });

        //add new question to exam
        $('#btn-add-question').click(function () {
            let total_questions = {{$examInfo->TotalQuestions}};
            $.ajax({
                url: '{!! route('sumQuestions',['ExamID' => $examInfo->ExamID]) !!}',
                type: 'get',
                success: function (data) {
                    if (data >= total_questions) {
                        alert('Đề thi này đã đủ số lượng ' + total_questions + ' câu!');
                        return false;
                    } else {
                        $('#btn-switch-mass-create').show();
                        $('#question_id').val('');
                        $('#questionForm').trigger("reset");
                        $('#question-modal-title').html("Thêm câu hỏi mới");
                        $('#question-modal').modal('show');
                    }
                },
                error: function (data) {
                    console.log('Error', data);
                }
            });
        });

        // Save question button
        $('#questionForm').validate({
            submitHandler: function (form) {
                $('#btn-save').html('Loading..');
                let answerArr = [];
                let checks = document.getElementsByName('correct-answer');
                for (let i = 0; i < checks.length; i++) {
                    if (checks[i].checked === true) {
                        answerArr.push(checks[i].value);
                    }
                }
                let answerStr = answerArr.join();
                let formData = {
                    'exam_id': $('#exam_id').val(),
                    'question_id': $('#question_id').val(),
                    'question-content': $('#question-content').val(),
                    'question-module': $('#question-module').val(),
                    'question-type': $('#question-type').val(),
                    'answer-A': $('#answer-A').val(),
                    'answer-B': $('#answer-B').val(),
                    'answer-C': $('#answer-C').val(),
                    'answer-D': $('#answer-D').val(),
                    'correct-answer': answerStr,
                    'question-explain': $('#question-explain').val()
                };
                $.ajax({
                    data: formData,
                    type: "post",
                    url: '{!! route('storeQuestion') !!}',
                    dataType: 'json',
                    success: function (data) {
                        $('#questionForm').trigger('reset');
                        $('#question-modal').modal('hide');
                        $('#btn-save').html('Lưu');
                        let oTable = $('#questions-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        alert('Lỗi: ' +
                            'Hãy kiểm tra tất cả các trường');
                        console.log('Error: ', data);
                        $('#btn-save').html('Lưu');
                    }
                });
            }
        });

        //edit exam info
        $('#btn-edit-exam').click(function () {
            let examID = {!! $examInfo->ExamID !!};
            $('#exam-modal').modal('show');
            $('#examForm').attr({
                action: '{!! url('tn-admin-th/exams/edit') !!}' + '/' + examID,
                method: "POST"
            });
            $('#exam-modal-title').html("Sửa đề thi");
            $('#exam_id').val(examID);
            $.ajax({
                type: "get",
                url: '{!! url('tn-admin-th/exams/edit') !!}' + '/' + examID,
                success: function (data) {
                    $('#exam-title').val(data.ExamTitle);
                    $('#exam-description').val(data.ExamDescription);
                    $('#exam-type').val(data.ExamType);
                    $('#exam-total-questions').val(data.TotalQuestions);
                    $('#exam-time-limit').val(data.TimeLimit);
                    $('#exam-status').val(data.Status);
                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        });

        // Save exam info button
        $('#examForm').validate({
            submitHandler: function (form) {
                $('#btn-save').html('Loading..');
                $.ajax({
                    data: $('#examForm').serialize(),
                    type: "post",
                    url: '{!! url('tn-admin-th/exams/store') !!}',
                    dataType: 'json',
                    success: function (data) {
                        alert('Sửa thông tin thành công');
                        location.reload();
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                        $('#btn-save').html('Lưu');
                    }
                });
            }
        });

        //delete all questions
        $('#btn-delete-all-quesions').click(function () {
            if (confirm("Bạn có chắc chắn muốn xóa tất cả câu hỏi khỏi đề thi này?") === true) {
                if (confirm("Chắc chắn chứ?") === true) {
                    $.ajax({
                        url: '{!! url('tn-admin-th/exams') !!}' + '/' + '{!! $examInfo->ExamID !!}' + '/removeAll',
                        type: 'get',
                        success: function (data) {
                            alert('Xóa thành công!');
                            let oTable = $('#questions-table').dataTable();
                            oTable.fnDraw(false);
                        },
                        error: function (data) {
                            console.log('Errors: ', data)
                        }
                    });
                }
            }
        });

        //auto compose exam
        $('#btn-compose-auto').click(function () {
            let countRow = $('#questions-table').dataTable().fnGetData().length;
            if (countRow !== 0) {
                alert('Soạn đề tự động yêu cầu đề thi hiện tại không có câu hỏi nào!');
                return false;
            } else {
                if(confirm('Bạn có chắc muốn soạn đề tự động?')===true) {
                    $('#btn-compose-auto').html('Đang soạn...');
                    $.ajax({
                        url: '{!! route('examAutoCompose',['ExamID' => $examInfo->ExamID]) !!}',
                        type: 'post',
                        success: function (data) {
                            if(data.status===0)
                                alert(data.message);
                            else {
                                alert('Soạn đề thành công!');
                                $('#btn-compose-auto').html('Soạn đề (tự động)');
                                let oTable = $('#questions-table').dataTable();
                                oTable.fnDraw(false);
                            }
                        },
                        error: function (data) {
                            console.log('Errors: ',data);
                        }
                    });
                }
            }
        });
    </script>
    <!-- DataTables JavaScript -->
    <script src="{{asset('public/admin-assets')}}/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/admin-assets')}}/js/dataTables/dataTables.bootstrap.min.js"></script>

@endpush
