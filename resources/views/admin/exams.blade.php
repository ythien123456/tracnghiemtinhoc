@extends('admin.adminLayout')

@push('title')
    Quản lý đề thi
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row page-header">
                <div class="col-md-1">
                    <a href="{{url()->previous()}}" title="Quay về trang trước"><h1><i class="fa fa-arrow-left"></i></h1></a>
                </div>
                <div class="col-md-11">
                    <h1>Đề thi</h1>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <a href="javascript:void(0)" id="create-new-exam" type="button" class="btn btn-success"><i
                        class="fa fa-plus"></i> Thêm đề thi</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách đề thi
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="exam-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Câu hỏi cần có</th>
                                <th>Câu hỏi hiện có</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>
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
    <div class="modal fade" id="exam-modal" aria-hidden="true">
        <div class="modal-dialog">
            <form id="examForm" name="examForm" class="form-horizontal">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exam-modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="exam_id" id="exam_id">
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
            $('#exam-table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{!! route('examsTable') !!}',
                    type: 'GET',
                },
                columns: [
                    {data: 'ExamID'},
                    {data: 'title'},
                    {data: 'TotalQuestions'},
                    {data: 'currentQuestions'},
                    {data: 'TimeLimit'},
                    {data: 'Status'},
                    {data: 'DateCreated'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

        // Create new exam button
        $('#create-new-exam').click(function () {
            $('#exam_id').val('');
            $('#examForm').trigger("reset");
            $('#exam-modal-title').html("Thêm đề thi mới");
            $('#exam-modal').modal('show');
        });

        // Edit button
        $('body').on('click', '#edit', function () {
            let examID = $(this).data("id");
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

        //Delete button
        $('body').on('click', '#delete', function () {
            let examID = $(this).data("id");
            if (confirm('Bạn có chắc muốn xóa đề thi ' + examID + ' ?') === true)
                $.ajax({
                    type: "get",
                    url: '{!! url('tn-admin-th/exams/delete') !!}' + '/' + examID,
                    success: function (data) {
                        let oTable = $('#exam-table').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });
        });

        // Save button
        $('#examForm').validate({
            submitHandler: function (form) {
                $('#btn-save').html('Loading..');
                $.ajax({
                    data: $('#examForm').serialize(),
                    type: "post",
                    url: '{!! url('tn-admin-th/exams/store') !!}',
                    dataType: 'json',
                    success: function (data) {
                        $('#examForm').trigger('reset');
                        $('#exam-modal').modal('hide');
                        $('#btn-save').html('Lưu');
                        let oTable = $('#exam-table').dataTable();
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
@endpush
