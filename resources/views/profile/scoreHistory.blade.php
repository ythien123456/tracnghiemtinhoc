@if(count($stats)<1)
    <div class="alert alert-info">
        Bạn chưa làm bài thi nào cả!
    </div>
@endif
<div class="panel-group" id="accordion">
    @foreach($stats as $stat)
        <div class="panel panel-default">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$stat->ExamID}}">
                    <h4 class="panel-title text-left" style="float:left;">
                        <span class="text-uppercase" style="font-weight: bold;">{{$stat->ExamTitle}}</span>
                    </h4>
                    <h4 class="panel-title text-right">
                        Số câu: {{$stat->TotalQuestions}}
                        - Thời gian: {{$stat->TimeLimit}}
                        - Lần thi: {{$stat->TimesDone}}
                    </h4>
                </a>
            </div>
            <div id="collapse{{$stat->ExamID}}" class="panel-collapse collapse">
                <div class="panel-body" style="max-height:300px; overflow: auto;">
                    <table class="table table-hover" style="cursor: default;">
                        <tr>
                            <th>Ngày thi</th>
                            <th>Vào lúc</th>
                            <th>Số câu đúng</th>
                            <th>Điểm (thang 10)</th>
                        </tr>
                        @for($i=0;$i<$stat->TimesDone;$i++)
                            <tr>
                                <td>{{date('d/m/Y',strtotime($scores['date'.$stat->ExamID.'-'.$i]))}}</td>
                                <td>{{date('H:m',strtotime($scores['date'.$stat->ExamID.'-'.$i]))}}</td>
                                <td>{{$scores['score'.$stat->ExamID.'-'.$i]}}</td>
                                <td>{{round(($scores['score'.$stat->ExamID.'-'.$i]/$stat->TotalQuestions)*10,2)}}</td>
                            </tr>
                        @endfor
                    </table>
                </div>
            </div>
        </div>
    @endforeach
</div>