@extends('layouts.main')

@section('additionalResources')
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/simpleQuiz.css')}}">
@endsection
@section('title')
    Làm Bài Thi
@endsection
@section('content')
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>{{$examInfo['ExamTitle']}}</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">{{$examInfo['ExamTitle']}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mu-course-content">
        @if(session()->has('score'))
            <div class="scoreShow">
                <h2 class="text-center">Bạn đã làm đúng: {{session()->get('score')}}/{{$examInfo->TotalQuestions}}
                    câu</h2>
            </div>
        @endif
        @if(isset($questions))
            @php
                $i=1;
            @endphp
            <div class="quizWrapper row">
                <form method="POST" action="{{url()->current()}}/submit">
                    <div class="col-md-8 leftContent">
                        <form method="POST" class="keepFormData" id="quizForm"
                              data-keep-form-data-clear-on-submit="yes">
                            <div class="content @if(session()->has('score')) contentDisabled @endif">
                                {{csrf_field()}}
                                <div class="tab-content">
                                    @foreach($questions as $singleQuestion)
                                        <div id="question{{$i}}" class="tab-pane fade">
                                            <div class="questionTitle row">
                                                <div class="col-md-6">
                                                    <h3>Câu hỏi #{{$i}}</h3>
                                                </div>
                                                <div class="col-md-6">
                                                    <h3><input type="button" id="questionFlag{{$i}}"
                                                               class="btn btn-success flagBtn"
                                                               value="Gắn cờ 🏳️" onclick="flagQuestion({{$i}})">‍</h3>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="questionContent">
                                                <p>{!! $singleQuestion->QuestionContent !!}</p>
                                            </div>
                                            <hr>
                                            <ul class="answerList">
                                                @if($singleQuestion->QuestionType==1)
                                                    <li class="question{{$i}}" onclick="radioChecked({{$i}},0)"><input
                                                                type="radio"
                                                                name="question{{$singleQuestion->QuestionID}}"
                                                                value="A"
                                                                @if(old('question'.$singleQuestion->QuestionID)=='A') checked @endif>
                                                        A.
                                                        {{$singleQuestion->A}}
                                                    </li>
                                                    <li class="question{{$i}}" onclick="radioChecked({{$i}},1)"><input
                                                                type="radio"
                                                                name="question{{$singleQuestion->QuestionID}}"
                                                                value="B"
                                                                @if(old('question'.$singleQuestion->QuestionID)=='B') checked @endif>
                                                        B.
                                                        {{$singleQuestion->B}}
                                                    </li>
                                                    <li class="question{{$i}}" onclick="radioChecked({{$i}},2)"><input
                                                                type="radio"
                                                                name="question{{$singleQuestion->QuestionID}}"
                                                                value="C"
                                                                @if(old('question'.$singleQuestion->QuestionID)=='C') checked @endif>
                                                        C. {{$singleQuestion->C}}
                                                    </li>
                                                    <li class="question{{$i}}" onclick="radioChecked({{$i}},3)"><input
                                                                type="radio"
                                                                name="question{{$singleQuestion->QuestionID}}"
                                                                value="D"
                                                                @if(old('question'.$singleQuestion->QuestionID)=='D') checked @endif>
                                                        D.
                                                        {{$singleQuestion->D}}
                                                    </li>
                                                @else
                                                    <li class="question{{$i}}" onclick="checkboxChecked({{$i}},0)">
                                                        <input
                                                                type="checkbox"
                                                                name="question{{$singleQuestion->QuestionID}}[]"
                                                                value="A" {{ (is_array(old('question'.$singleQuestion->QuestionID)) and
                                in_array('A', old('question'.$singleQuestion->QuestionID))) ? ' checked' : '' }}> A.
                                                        {{$singleQuestion->A}}
                                                    </li>
                                                    <li class="question{{$i}}" onclick="checkboxChecked({{$i}},1)">
                                                        <input
                                                                type="checkbox"
                                                                name="question{{$singleQuestion->QuestionID}}[]"
                                                                value="B" {{(is_array(old('question'.$singleQuestion->QuestionID)) and
                                in_array('B', old('question'.$singleQuestion->QuestionID))) ? ' checked' : '' }}> B.
                                                        {{$singleQuestion->B}}
                                                    </li>
                                                    <li class="question{{$i}}" onclick="checkboxChecked({{$i}},2)">
                                                        <input
                                                                type="checkbox"
                                                                name="question{{$singleQuestion->QuestionID}}[]"
                                                                value="C" {{(is_array(old('question'.$singleQuestion->QuestionID)) and
                                in_array('C', old('question'.$singleQuestion->QuestionID))) ? ' checked' : '' }}> C.
                                                        {{$singleQuestion->C}}
                                                    </li>
                                                    <li class="question{{$i}}" onclick="checkboxChecked({{$i}},3)">
                                                        <input
                                                                type="checkbox"
                                                                name="question{{$singleQuestion->QuestionID}}[]"
                                                                value="D" {{(is_array(old('question'.$singleQuestion->QuestionID)) and
                                in_array('D', old('question'.$singleQuestion->QuestionID))) ? ' checked' : '' }}> D.
                                                        {{$singleQuestion->C}}
                                                    </li>
                                                @endif
                                            </ul>
                                            @if(session()->has('answersArray'))
                                                @php
                                                    $answersArray = session()->get('answersArray');
                                                @endphp
                                                <hr>
                                                <div class="showCorrectAnswer">
                                                    <div class="row">
                                                        <div class="col-md-4" style="border-right:1px black solid;">
                                                            Đáp án: {{$answersArray[$singleQuestion->QuestionID]}}
                                                        </div>
                                                        <div class="col-md-8">
                                                            Lời
                                                            giải: {{$answersArray['ex'.$singleQuestion->QuestionID]}}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="numbers">
                            <div class="navigateBtn">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="button" class="btn btn-success toPrevious"
                                               onclick="previousQuestion()"
                                               value="<<<">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="button" class="btn btn-success toNext" style="margin:0 auto;"
                                               onclick="nextQuestion()" value=">>>">
                                    </div>
                                </div>
                            </div>
                            <div class="questionsNum">
                                <ul class="nav nav-pills">
                                    @php
                                        $j=1;
                                    @endphp
                                    @foreach($questions as $singleQuestions)
                                        <li id="questionBtn{{$j}}" @if(session()->has('score')) class="answered" @endif>
                                            <a data-toggle="pill"
                                               href="#question{{$j}}">Câu {{$j}}</a></li>
                                        @php
                                            $j++;
                                        @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div align="center" class="examSubmit">
                            <input type="submit" id="mainSubmit" style="display:none;">
                            <input type="button" id="submitSupport" class="btn btn-primary examSubmitBtn"
                                   value="Nộp Bài!" onclick="submitExam();">
                        </div>
                </form>
            </div>
            <div class="col-md-4 rightContent">
                <div class="countdownTimer">
                    @if(isset($examInfo))
                        <h2>{{$examInfo['ExamTitle']}}</h2>
                        <h4>Số câu hỏi: {{$examInfo['TotalQuestions']}}</h4>
                        <h4>Thời gian: {{$examInfo['TimeLimit']}} phút</h4>
                    @endif
                    <div class="circle-timer">
                        <div class="timer-text">
                            Thời Gian
                            <div id="remaining"></div>
                        </div>
                        <svg version="1.1" x="0px" y="0px" width="210px" height="210px" viewBox="0 0 210 210"
                             enable-background="new 0 0 210 210" xml:space="preserve">
                    <defs>
                        <clipPath id="clip">
                            <circle cx="105" cy="105" r="99"></circle>
                        </clipPath>
                        <linearGradient id="grad" gradientUnits="userSpaceOnUse" x1="160" y1="105" x2="80" y2="160">
                            <stop id="stop1" offset="0" style="stop-color:#64e134"/>
                            <stop id="stop2" offset="1" style="stop-color:#b2ef49"/>
                        </linearGradient>
                    </defs>
                            <circle fill="url(#grad)" cx="105" cy="105" r="99" stroke-width="1" stroke="#bbb"/>
                            <g transform="rotate(270.1 105 105)">
                                <circle id="ticker" fill="none" cx="105" cy="105" r="95.4" stroke="#000"
                                        stroke-width="13"
                                        clip-path="url(#clip)"/>
                            </g>
                            <circle fill="#262626" cx="105" cy="105" r="90"/>
                </svg>
                    </div>
                    <br>
                    <button type="button" class="btn btn-success" id="navigationButtonStatus"
                            onclick="autoSwitchQuestion()">
                        TỰ CHUYỂN CÂU: <span
                                id="navigationStatus">BẬT (✔)</span></button>
                    <br><br>
                    <button type="button" class="btn btn-danger" id="showFlaggedQuestionStatus"
                            onclick="showFlaggedQuestionOnly()">
                        HIỆN CÂU GẮN CỜ: <span
                                id="showFlaggedStatus">TẮT (✘)</span></button>
                </div>
                <div class="keyInstruction">
                    <h4 class="text-info text-uppercase text-center">Hướng dẫn phím tắt</h4>
                    <table class="table-striped table-hover">
                        <tr>
                            <td>Chọn (A):</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/1.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Chọn (B):</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/2.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Chọn (C):</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/3.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Chọn (D):</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/4.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Câu hỏi tiếp theo:</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/right.png')}}"></td>
                        </tr>
                        <tr>
                            <td> Câu hỏi trước đó:</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/left.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Bật/tắt tự chuyển câu:</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/P.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Gắn cờ/Bỏ gắn cờ câu hỏi:</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/F.png')}}"></td>
                        </tr>
                        <tr>
                            <td>Bật/tắt hiển thị câu hỏi gắn cờ:</td>
                            <td><img src="{{asset('public/img/keyboardbuttons/G.png')}}"></td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        @endif
    </section>
    <script type="text/javascript">
        window.onbeforeunload = function() {
            return "Bài làm hiện tại của bạn sẽ bị mất nếu tải lại trang!";
        }
    </script>
    <script src="{{asset('public/js/simpleQuiz.js')}}"></script>

    <script>
        let dealTimer = (function () {
            let expires = new Date().getTime() + ({{$examInfo['TimeLimit']}} * 60 * 1000
        )
            ; //edit minutes here
            let val = 100;
            let mask = document.querySelector('#ticker');
            let radius = mask.getAttribute('r');
            let circum = Math.ceil(radius * 2 * Math.PI);
            let interval = 1;
            let dashOff;
            let grad = document.getElementById('grad');
            let cs1 = document.getElementById('stop1');
            let cs2 = document.getElementById('stop2');
            let txt = document.getElementById('remaining');
            let tocolor = '#b2ef49';
            let rotated = false;
            let remaining = 0;
            let maxTime = {{$examInfo['TimeLimit']}} *
            60 * 1000; //edit minutes here
            let ticked = [];

            let colors = {
                70: '#f1de32',
                50: '#f09233',
                35: '#ef0c19',
                25: '#ef0c19'
            };

            let rotateGradient = function () {
                grad.setAttribute('x1', 100);
                grad.setAttribute('x2', 100);
                grad.setAttribute('y1', 0);
                grad.setAttribute('y2', 150);
                rotated = true;
            };

            let changeColors = function (c) {
                //console.log('color change');
                if (!rotated) rotateGradient();
                cs2.style.stopColor = tocolor;
                cs1.style.stopColor = c;
                txt.style.color = tocolor;
                tocolor = c;
            };

            mask.style.strokeDasharray = circum + ' ' + circum;

            let progress = function () {
                let tickby = remaining / maxTime * 1000;
                let perc = (tickby * 100) << 0;
                //console.log(perc);
                dashOff = (100 - tickby) * circum;
                mask.style.strokeDashoffset = dashOff;
                if (perc in colors && ticked.indexOf(perc) == -1) {
                    ticked.push(perc);
                    changeColors(colors[perc]);
                }
            };


            let tick = function () {
                remaining--;
                if (remaining % interval === 0) {
                    progress();
                }
                txt.innerHTML = timeText(remaining);
                if (remaining > 0) {
                    window.setTimeout(tick, 1000);
                } else {
                    mask.style.stroke = 'none';
                    forceSubmit(); //action when countdown ends
                }
            };

            let timeText = function (ms) {
                let min = (ms / 60) << 0,
                    sec = (ms) % 60;
                return min + ':' + (sec < 10 ? '0' : '') + sec;
            };

            let timeLeft = function () {
                let endTime = new Date().getTime() + maxTime;
                remaining = Math.floor((endTime - new Date().getTime()) / 1000);
                interval = remaining / circum;
            };

            let init = function () {
                timeLeft();
                tick();
            };
            init();
        })();
    </script>
@endsection