@extends('layouts.main')

@push('additionalResources')
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/simpleQuiz.css')}}">
@endpush
@push('title')
    Làm Bài Thi
@endpush
@section('content')
    @if(!session('Email'))
        <script>
            window.addEventListener('load', function () {
                alert('Bạn cần phải đăng nhập để làm bài');
                document.location.href = '{{url('/login.html')}}';
            })
        </script>
    @endif
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
            @php
                $answersArray = session()->get('answersArray');
            @endphp
        @endif
        @if(session('qArr'))
            @php
                $i=1;
                $qArr = session('qArr');
            @endphp
            <div class="quizWrapper row">
                <div class="col-md-8 leftContent">
                    <form method="POST" action="{{url()->current()}}/submit">
                        {{csrf_field()}}
                        <div class="content">
                            <div class="tab-content">
                                @for($i=0;$i<sizeof($qArr)/7;$i++)
                                    <div id="question{{$i+1}}" class="tab-pane fade">
                                        <div class="questionTitle row">
                                            <div class="col-md-6">
                                                <h3>Câu hỏi #{{$i+1}}</h3>
                                            </div>
                                            <div class="col-md-6">
                                                <h3 class="titleButtons">
                                                    <input type="button" class="btn btn-success toPrevious"
                                                           onclick="previousQuestion()"
                                                           value="←">
                                                    <input type="button" class="btn btn-success toNext"
                                                           style="margin:0 auto;"
                                                           onclick="nextQuestion()" value="→">
                                                    <input type="button" id="questionFlag{{$i+1}}"
                                                           class="btn btn-success flagBtn @if(session()->has('score'))disappear @endif"
                                                           value="Gắn cờ 🚩" onclick="flagQuestion({{$i+1}})">‍
                                                </h3>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="questionContent">
                                            <p>{!! $qArr['QuestionContent'.$i] !!}</p>
                                        </div>
                                        <hr>
                                        <ul class="answerList @if(session()->has('score'))actionDisabled @endif">
                                            @if($qArr['QuestionType'.$i]==1)
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{$answersArray[$qArr['QuestionID'.$i]]=='A' ? 'rightAnswer' : ''}}
                                                {{old('question'.$qArr['QuestionID'.$i])!=null && old('question'.$qArr['QuestionID'.$i])!=$answersArray[$qArr['QuestionID'.$i]] && old('question'.$qArr['QuestionID'.$i])=='A' ? 'wrongAnswer' : ''}}
                                                @endif"
                                                    onclick="radioChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},0)">
                                                    <input
                                                            type="radio"
                                                            name="question{{$qArr['QuestionID'.$i]}}"
                                                            value="A"
                                                            @if(old('question'.$qArr['QuestionID'.$i])=='A') checked @endif>
                                                    A.
                                                    {{$qArr['A'.$i]}}
                                                </li>
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{$answersArray[$qArr['QuestionID'.$i]]=='B' ? 'rightAnswer' : ''}}
                                                {{old('question'.$qArr['QuestionID'.$i])!=null && old('question'.$qArr['QuestionID'.$i])!=$answersArray[$qArr['QuestionID'.$i]] && old('question'.$qArr['QuestionID'.$i])=='B' ? 'wrongAnswer' : ''}}
                                                @endif"
                                                    onclick="radioChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},1)">
                                                    <input
                                                            type="radio"
                                                            name="question{{$qArr['QuestionID'.$i]}}"
                                                            value="B"
                                                            @if(old('question'.$qArr['QuestionID'.$i])=='B') checked @endif>
                                                    B.
                                                    {{$qArr['B'.$i]}}
                                                </li>
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{$answersArray[$qArr['QuestionID'.$i]]=='C' ? 'rightAnswer' : ''}}
                                                {{old('question'.$qArr['QuestionID'.$i])!=null && old('question'.$qArr['QuestionID'.$i])!=$answersArray[$qArr['QuestionID'.$i]] && old('question'.$qArr['QuestionID'.$i])=='C' ? 'wrongAnswer' : ''}}
                                                @endif"
                                                    onclick="radioChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},2)">
                                                    <input
                                                            type="radio"
                                                            name="question{{$qArr['QuestionID'.$i]}}"
                                                            value="C"
                                                            @if(old('question'.$qArr['QuestionID'.$i])=='C') checked @endif>
                                                    C. {{$qArr['C'.$i]}}
                                                </li>
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{$answersArray[$qArr['QuestionID'.$i]]=='D' ? 'rightAnswer' : ''}}
                                                {{old('question'.$qArr['QuestionID'.$i])!=null && old('question'.$qArr['QuestionID'.$i])!=$answersArray[$qArr['QuestionID'.$i]] && old('question'.$qArr['QuestionID'.$i])=='D' ? 'wrongAnswer' : ''}}
                                                @endif"
                                                    onclick="radioChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},3)">
                                                    <input
                                                            type="radio"
                                                            name="question{{$qArr['QuestionID'.$i]}}"
                                                            value="D"
                                                            @if(old('question'.$qArr['QuestionID'.$i])=='D') checked @endif>
                                                    D.
                                                    {{$qArr['D'.$i]}}
                                                </li>
                                            @else
                                                @if(session()->has('answersArray'))
                                                    @php
                                                        $checkBoxAnswers = explode(",",$answersArray[$qArr['QuestionID'.$i]]);
                                                    @endphp
                                                @endif
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{ in_array('A', $checkBoxAnswers) ? 'rightAnswer' : '' }}
                                                {{ !in_array('A', $checkBoxAnswers) && (is_array(old('question'.$qArr['QuestionID'.$i])) and
                                in_array('A', old('question'.$qArr['QuestionID'.$i]))) ? 'wrongAnswer' : '' }}
                                                @endif"
                                                    onclick="checkboxChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},0)">
                                                    <input
                                                            type="checkbox"
                                                            name="question{{$qArr['QuestionID'.$i]}}[]"
                                                            value="A" {{ (is_array(old('question'.$qArr['QuestionID'.$i])) and
                                in_array('A', old('question'.$qArr['QuestionID'.$i]))) ? ' checked' : '' }}> A.
                                                    {{$qArr['A'.$i]}}
                                                </li>
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{ in_array('B', $checkBoxAnswers) ? 'rightAnswer' : '' }}
                                                {{ !in_array('B', $checkBoxAnswers) && (is_array(old('question'.$qArr['QuestionID'.$i])) and
                                in_array('B', old('question'.$qArr['QuestionID'.$i]))) ? 'wrongAnswer' : '' }}
                                                @endif"
                                                    onclick="checkboxChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},1)">
                                                    <input
                                                            type="checkbox"
                                                            name="question{{$qArr['QuestionID'.$i]}}[]"
                                                            value="B" {{(is_array(old('question'.$qArr['QuestionID'.$i])) and
                                in_array('B', old('question'.$qArr['QuestionID'.$i]))) ? ' checked' : '' }}> B.
                                                    {{$qArr['B'.$i]}}
                                                </li>
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{ in_array('C', $checkBoxAnswers) ? 'rightAnswer' : '' }}
                                                {{ !in_array('C', $checkBoxAnswers) && (is_array(old('question'.$qArr['QuestionID'.$i])) and
                        in_array('C', old('question'.$qArr['QuestionID'.$i]))) ? 'wrongAnswer' : '' }}
                                                @endif"
                                                    onclick="checkboxChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},2)">
                                                    <input
                                                            type="checkbox"
                                                            name="question{{$qArr['QuestionID'.$i]}}[]"
                                                            value="C" {{(is_array(old('question'.$qArr['QuestionID'.$i])) and
                                in_array('C', old('question'.$qArr['QuestionID'.$i]))) ? ' checked' : '' }}> C.
                                                    {{$qArr['C'.$i]}}
                                                </li>
                                                <li class="question{{$i+1}}
                                                @if(session()->has('answersArray'))
                                                {{ in_array('D', $checkBoxAnswers) ? 'rightAnswer' : '' }}
                                                {{ !in_array('D', $checkBoxAnswers) && (is_array(old('question'.$qArr['QuestionID'.$i])) and
                        in_array('D', old('question'.$qArr['QuestionID'.$i]))) ? 'wrongAnswer' : '' }}
                                                @endif"
                                                    onclick="checkboxChecked({{$i+1}},{{$qArr['QuestionID'.$i]}},3)">
                                                    <input
                                                            type="checkbox"
                                                            name="question{{$qArr['QuestionID'.$i]}}[]"
                                                            value="D" {{(is_array(old('question'.$qArr['QuestionID'.$i])) and
                                in_array('D', old('question'.$qArr['QuestionID'.$i]))) ? ' checked' : '' }}> D.
                                                    {{$qArr['D'.$i]}}
                                                </li>
                                            @endif
                                        </ul>
                                        @if(session()->has('answersArray'))
                                            <hr>
                                            <div class="showCorrectAnswer">
                                                Lời giải: {{$answersArray['explain'.$qArr['QuestionID'.$i]]}}
                                            </div>
                                        @endif
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <hr>
                        <div class="quiz-bottom">
                            <div class="quiz-bottom-buttons">
                                <div id="countdown">{{$examInfo['TimeLimit']}}:00</div>
                                <div class="examSubmit">
                                    <input type="submit" id="mainSubmit" style="display:none;">
                                    <input type="button" id="submitSupport" class="btn btn-primary examSubmitBtn"
                                           value="Nộp Bài!" onclick="submitExam();">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 rightContent">
                    <div class="numbers">
                        <div class="questionsNum">
                            <ul class="nav nav-pills">
                                @php
                                    $j=1;
                                @endphp
                                @for($i=1;$i<=sizeof($qArr)/7;$i++)
                                    <li id="questionBtn{{$i}}">
                                        <a data-toggle="pill"
                                           href="#question{{$i}}"><span class="pillNums">{{$i<10 ? '0'.$i : $i}}</span></a>
                                    </li>
                                @endfor
                            </ul>
                            @if(session()->has('score'))
                                <script>
                                    const questionNumList = document.querySelectorAll('.numbers .questionsNum ul li');
                                    for (let i = 0; i < questionNumList.length; i++) {
                                        let isWrong = false;
                                        let answerCheckList = document.querySelectorAll('.content .answerList li.question' + (i + 1));
                                        for (let j = 0; j <= 3; j++) {
                                            if (answerCheckList[j].classList.contains('wrongAnswer')) {
                                                questionNumList[i].classList.add('wrongAnsweredQuestion');
                                                isWrong = true;
                                                // questionNumList[i].style.background = 'lightpink';
                                                break;
                                            }
                                        }
                                        !isWrong ? questionNumList[i].classList.add('answered') : '';
                                    }
                                </script>
                            @endif
                        </div>
                    </div>
                    <div class="countdownTimer">
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
                        <button type="button" class="btn btn-success @if(session()->has('score'))disappear @endif"
                                id="navigationButtonStatus"
                                onclick="autoSwitchQuestion()">
                            TỰ CHUYỂN CÂU: <span
                                    id="navigationStatus">BẬT (✔)</span></button>
                        <br><br>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <script src="{{asset('public/js/simpleQuiz.js')}}"></script>
    @if(session()->has('score'))
        <script>
            allowKeyboard = false;
            const remainTime = document.getElementById('remaining');
            const remainTimeSmall = document.getElementById('countdown');
            remainTime.innerText = localStorage.getItem('remainingTime');
            remainTimeSmall.innerText = localStorage.getItem('remainingTime');
        </script>
    @else
        <script>
            window.onbeforeunload = function () {
                return "Bài làm hiện tại của bạn sẽ bị mất nếu tải lại trang!";
            };
        </script>
        <script>
            var seconds = {{$examInfo['TimeLimit']*60}},
                countdiv = document.getElementById('countdown'),
                countfunc,
                counter = setInterval(function () {
                    'use strict';
                    countfunc();
                }, 1000);

            function countfunc() {
                'use strict';
                var minutes = Math.floor(seconds / 60),
                    remseconds = seconds % 60;
                if (minutes < 10) {
                    minutes = '0' + minutes;
                }
                if (remseconds < 10) {
                    remseconds = '0' + remseconds;
                }
                if (remseconds === 0) {
                    remseconds = '0' + remseconds;
                }
                countdiv.innerHTML = minutes + ':' + remseconds;
                if (seconds >= 0) {
                    seconds = seconds - 1;
                } else {
                    clearInterval(counter);
                    countdiv.innerHTML = ('Done...');
                }
            }
        </script>
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
                    if (perc in colors && ticked.indexOf(perc) === -1) {
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
    @endif
@endsection