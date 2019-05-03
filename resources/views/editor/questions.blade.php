@extends('editor.editorLayout')

@push('title')
    Quản lý câu hỏi
@endpush

@push('active-quan-ly')
    active
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Câu hỏi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="javascript:void(0)" id="create-new-question" type="button" class="btn btn-success"><i
                        class="fa fa-plus"></i> Thêm câu hỏi</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách câu hỏi
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
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="submit" id="btn-save" name="btn-save" class="btn btn-success">Lưu
                            </button>
                            <button type="button" id="btn-switch-mass-create" name="btn-switch-mass-create"
                                    class="btn btn-danger">Thêm liên tục: Đang <span class="mass-create-status">TẮT</span>
                            </button>
                        </div>
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
                    url: '{!! route('questionsTable') !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'QuestionID'},
                    {data: 'QuestionContent'},
                    {data: 'ModuleID'},
                    {data: 'QuestionType'},
                    {data: 'DateCreated'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
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

        //On change question type
        $('#question-type').change(function () {
            if ($('#question-type').val() === '2')
                $('input:radio').prop('type', 'checkbox');
            else
                $('input:checkbox').prop('type', 'radio');
        });

        //Delete button
        $('body').on('click', '#delete', function () {
            let questionID = $(this).data("id");
            if (confirm('Bạn muốn xóa câu hỏi ' + questionID + ' ?') === true)
                $.ajax({
                    url: '{!! url('tn-admin-th/questions/delete') !!}' + '/' + questionID,
                    type: "GET",
                    success: function (data) {
                        let oTable = $('#questions-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });
        });

        // Create new question button
        $('#create-new-question').click(function () {
            $('#btn-switch-mass-create').show();
            $('#question_id').val('');
            $('#questionForm').trigger("reset");
            $('#question-modal-title').html("Thêm câu hỏi mới");
            $('#question-modal').modal('show');
        });

        // Edit button
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

        // Save button
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
                        if(mass_create_status===false)
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
    </script>
@endpush
