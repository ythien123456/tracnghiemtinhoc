@extends('layouts.main')

@section('content')
    <div class="container examDetailsContent">
        @if(Session::has('score'))
            <p>Your score is: {{Session::get('score')}}</p>
        @endif
        @if(isset($questions))
            @php
                $i=1;
            @endphp
            <form method="POST" action="{{url()->current()}}/submit">
                {!! csrf_field() !!}
                @foreach($questions as $singleQuestion)
                    <br>{{$i++.'. '.$singleQuestion->QuestionContent}}<br>
                    @if($singleQuestion->QuestionType==2)
                        Loại câu hỏi: {{$singleQuestion->QuestionType}}<br>
                        <input type="checkbox" name="{{$singleQuestion->QuestionID}}[0]" value="A"
                                {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('A', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                        A. {{$singleQuestion->A}}
                        <br>
                        <input type="checkbox" name="{{$singleQuestion->QuestionID}}[1]" value="B"
                                {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('B', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                        B. {{$singleQuestion->B}}
                        <br>
                        <input type="checkbox" name="{{$singleQuestion->QuestionID}}[2]" value="C"
                                {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('C', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                        C. {{$singleQuestion->C}}
                        <br>
                        <input type="checkbox" name="{{$singleQuestion->QuestionID}}[3]" value="D"
                                {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('D', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                        D. {{$singleQuestion->D}}
                        <br>
                    @else
                        <input type="radio" name="{{$singleQuestion->QuestionID}}" value="A"
                               @if(old($singleQuestion->QuestionID)=='A') checked @endif> A. {{$singleQuestion->A}}<br>
                        <input type="radio" name="{{$singleQuestion->QuestionID}}" value="B"
                               @if(old($singleQuestion->QuestionID)=='B') checked @endif> B. {{$singleQuestion->B}}<br>
                        <input type="radio" name="{{$singleQuestion->QuestionID}}" value="C"
                               @if(old($singleQuestion->QuestionID)=='C') checked @endif> C. {{$singleQuestion->C}}<br>
                        <input type="radio" name="{{$singleQuestion->QuestionID}}" value="D"
                               @if(old($singleQuestion->QuestionID)=='D') checked @endif> D. {{$singleQuestion->D}}<br>
                    @endif
                @endforeach
                <br><input type="submit" class="btn btn-success" name="submitExam" value="Nộp bài">
            </form>
        @endif
    </div>
    <div class="examTakingForm">
        <form method="POST" action="{{url()->current()}}/submit">
        {{csrf_field()}}
        <!-- Tab panes -->
            @php
                $i=1;
            @endphp
            <div class="tab-content">

                @foreach($questions as $singleQuestion)
                    <div id="question{{$singleQuestion->QuestionID}}" class="tab-pane">
                        <h3>Câu {{$i++}}: </h3>
                        <p>{{$singleQuestion->QuestionContent}}</p>
                        <ul>
                            <li>
                                <input type="radio"
                                       name="{{$singleQuestion->QuestionID}}" value="A"
                                       @if(old($singleQuestion->QuestionID)=='A') checked @endif>
                                A. {{$singleQuestion->A}}
                            </li>
                            <li><input type="radio" name="{{$singleQuestion->QuestionID}}" value="B"
                                       @if(old($singleQuestion->QuestionID)=='B') checked @endif>
                                B. {{$singleQuestion->B}}
                            </li>
                            <li><input type="radio" name="{{$singleQuestion->QuestionID}}" value="C"
                                       @if(old($singleQuestion->QuestionID)=='C') checked @endif>
                                C. {{$singleQuestion->C}}
                            </li>
                            <li><input type="radio" name="{{$singleQuestion->QuestionID}}" value="D"
                                       @if(old($singleQuestion->QuestionID)=='D') checked @endif>
                                D. {{$singleQuestion->D}}
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <!--tabs -->
            <ul class="nav nav-tabs" role="tablist">
                @php $i=1; @endphp
                @foreach($questions as $singleQuestion)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab"
                           href="#question{{$singleQuestion->QuestionID}}">Câu {{$i++}}</a>
                    </li>
                @endforeach
            </ul>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
@endsection