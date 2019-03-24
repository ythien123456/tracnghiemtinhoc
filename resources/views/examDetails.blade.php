@extends('layouts.main')

@section('additionalResources')
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/simpleQuiz.css')}}">
@endsection
@section('title')
    Làm Bài Thi
@endsection
@section('content')
    {{--<div class="container examDetailsContent">--}}
        @if(Session::has('score'))
            <p>Your score is: {{Session::get('score')}}</p>
        @endif
        {{--@if(isset($questions))--}}
            {{--@php--}}
                {{--$i=1;--}}
            {{--@endphp--}}
            {{--<form method="POST" action="{{url()->current()}}/submit">--}}
                {{--{!! csrf_field() !!}--}}
                {{--@foreach($questions as $singleQuestion)--}}
                    {{--<br>{{$i++.'. '.$singleQuestion->QuestionContent}}<br>--}}
                    {{--@if($singleQuestion->QuestionType==2)--}}
                        {{--Loại câu hỏi: {{$singleQuestion->QuestionType}}<br>--}}
                        {{--<input type="checkbox" name="{{$singleQuestion->QuestionID}}[0]" value="A"--}}
                                {{--{{ (is_array(old($singleQuestion->QuestionID)) and--}}
                                {{--in_array('A', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>--}}
                        {{--A. {{$singleQuestion->A}}--}}
                        {{--<br>--}}
                        {{--<input type="checkbox" name="{{$singleQuestion->QuestionID}}[1]" value="B"--}}
                                {{--{{ (is_array(old($singleQuestion->QuestionID)) and--}}
                                {{--in_array('B', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>--}}
                        {{--B. {{$singleQuestion->B}}--}}
                        {{--<br>--}}
                        {{--<input type="checkbox" name="{{$singleQuestion->QuestionID}}[2]" value="C"--}}
                                {{--{{ (is_array(old($singleQuestion->QuestionID)) and--}}
                                {{--in_array('C', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>--}}
                        {{--C. {{$singleQuestion->C}}--}}
                        {{--<br>--}}
                        {{--<input type="checkbox" name="{{$singleQuestion->QuestionID}}[3]" value="D"--}}
                                {{--{{ (is_array(old($singleQuestion->QuestionID)) and--}}
                                {{--in_array('D', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>--}}
                        {{--D. {{$singleQuestion->D}}--}}
                        {{--<br>--}}
                    {{--@else--}}
                        {{--<input type="radio" name="{{$singleQuestion->QuestionID}}" value="A"--}}
                               {{--@if(old($singleQuestion->QuestionID)=='A') checked @endif> A. {{$singleQuestion->A}}<br>--}}
                        {{--<input type="radio" name="{{$singleQuestion->QuestionID}}" value="B"--}}
                               {{--@if(old($singleQuestion->QuestionID)=='B') checked @endif> B. {{$singleQuestion->B}}<br>--}}
                        {{--<input type="radio" name="{{$singleQuestion->QuestionID}}" value="C"--}}
                               {{--@if(old($singleQuestion->QuestionID)=='C') checked @endif> C. {{$singleQuestion->C}}<br>--}}
                        {{--<input type="radio" name="{{$singleQuestion->QuestionID}}" value="D"--}}
                               {{--@if(old($singleQuestion->QuestionID)=='D') checked @endif> D. {{$singleQuestion->D}}<br>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
                {{--<br><input type="submit" class="btn btn-success" name="submitExam" value="Nộp bài">--}}
            {{--</form>--}}
        {{--@endif--}}
    {{--</div>--}}
    {{--Test form section--}}
    @if(isset($questions))
        @php
            $i=1;
        @endphp
        <form method="POST" action="{{url()->current()}}/submit">
            {{csrf_field()}}
            <div class="quizWrapper">
                <div class="content">
                    <div class="tab-content">
                        @foreach($questions as $singleQuestion)
                            <div id="question{{$i}}" class="tab-pane fade"><h3>Câu hỏi số {{$i}}</h3>
                                <hr>
                                <p>{{$singleQuestion->QuestionContent}}</p>
                                <hr>
                                <ul class="answerList">
                                    @if($singleQuestion->QuestionType==1)
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},0)">
                                            <input type="radio" name="question{{$singleQuestion->QuestionID}}"
                                                   value="A" @if(old($singleQuestion->QuestionID)=='A') checked @endif>
                                            A. {{$singleQuestion->A}}
                                        </li>
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},1)">
                                            <input type="radio" name="question{{$singleQuestion->QuestionID}}"
                                                   value="B" @if(old($singleQuestion->QuestionID)=='A') checked @endif>
                                            B. {{$singleQuestion->B}}
                                        </li>
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},2)">
                                            <input type="radio" name="question{{$singleQuestion->QuestionID}}"
                                                   value="C" @if(old($singleQuestion->QuestionID)=='A') checked @endif>
                                            C. {{$singleQuestion->C}}
                                        </li>
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},3)">
                                            <input type="radio" name="question{{$singleQuestion->QuestionID}}"
                                                   value="D" @if(old($singleQuestion->QuestionID)=='A') checked @endif>
                                            D. {{$singleQuestion->D}}
                                        </li>
                                    @else
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},0)">
                                            <input type="checkbox" name="question{{$singleQuestion->QuestionID}}[0]"
                                                   value="A" {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('A', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                                            A. {{$singleQuestion->A}}
                                        </li>
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},1)">
                                            <input type="checkbox" name="question{{$singleQuestion->QuestionID}}[1]"
                                                   value="B" {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('A', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                                            B. {{$singleQuestion->B}}
                                        </li>
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},2)">
                                            <input type="checkbox" name="question{{$singleQuestion->QuestionID}}[2]"
                                                   value="C" {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('A', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                                            C. {{$singleQuestion->C}}
                                        </li>
                                        <li class="question{{$i}}"
                                            onclick="questionChecked({{$i}},3)">
                                            <input type="checkbox" name="question{{$singleQuestion->QuestionID}}[3]"
                                                   value="D" {{ (is_array(old($singleQuestion->QuestionID)) and
                                in_array('A', old($singleQuestion->QuestionID))) ? ' checked' : '' }}>
                                            D. {{$singleQuestion->D}}
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </div>

                </div>
                <div class="numbers">
                    <div class="navigateBtn">
                        <button class="btn btn-success toPrevious" onclick="previousQuestion(); return false;"><<<
                        </button>
                        <button class="btn btn-success toNext" onclick="nextQuestion(); return false;">>>></button>
                    </div>
                    <div class="questionsNum">
                        <ul class="nav nav-pills">
                            @php
                                $j = 1;
                            @endphp
                            @for($j=1; $j <= $i-1; $j++)
                                <li id="questionBtn{{$j}}"><a data-toggle="pill" href="#question{{$j}}">Câu {{$j}}</a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <hr>
                <div align="center" class="examSubmit">
                    <input type="submit" class="btn btn-success examSubmitBtn" value="Nộp Bài!">
                </div>
            </div>

        </form>
    @endif
    {{--End test form section--}}
    <script>
        // Active question #1 when load the test
        document.querySelector('#questionBtn1').className = 'active';
        document.querySelector('#question1').classList.add('in');
        document.querySelector('#question1').classList.add('active');
        const totalQuestions = document.querySelectorAll('.answerList').length;

        function nextQuestion() {
            const currentActiveButton = document.querySelector('.quizWrapper ul .active');
            const currentActiveTabContent = document.querySelector('.quizWrapper .content .active');
            let activeButtonID = currentActiveButton.id.match(/\d/g);
            activeButtonID = parseInt(activeButtonID.join(""));
            if (activeButtonID < totalQuestions)
                activateQuestion(activeButtonID, currentActiveButton, currentActiveTabContent, +1);
            else
                alert('This is the last question already!');
        }

        function previousQuestion() {
            const currentActiveButton = document.querySelector('.quizWrapper ul .active');
            const currentActiveTabContent = document.querySelector('.quizWrapper .content .active');
            let activeButtonID = currentActiveButton.id.match(/\d/g);
            activeButtonID = parseInt(activeButtonID.join(""));
            if (activeButtonID > 1)
                activateQuestion(activeButtonID, currentActiveButton, currentActiveTabContent, -1);
            else
                alert('This is the very first question!');
        }

        //Set tab-content & Button to active so they will both active at the same time
        function activateQuestion(currentActiveBtnID, currentActiveBtn, currentActiveContent, jump) {
            currentActiveBtn.classList.remove('active');
            document.querySelector('#questionBtn' + (currentActiveBtnID + jump)).classList.add('active');
            currentActiveContent.classList.remove('active');
            document.querySelector('#question' + (currentActiveBtnID + jump)).classList.add('in');
            document.querySelector('#question' + (currentActiveBtnID + jump)).classList.add('active');
        }

        //Check the Radio by pressing on list items, then change the item color and go to next question
        function questionChecked(questionID, index) {
            const radioCheckbox = document.getElementsByName('question' + questionID)[index];
            radioCheckbox.checked = true;
            let listItems = document.getElementsByClassName('question' + questionID);
            for (let item of listItems) {
                item.style.background = 'rgba(0,0,0,0)';
            }
            const selectedItem = document.getElementsByClassName('question' + questionID)[index];
            selectedItem.style.backgroundColor = 'lightgray';
            const checkedQuestion = document.querySelector('#questionBtn' + questionID);
            checkedQuestion.style.backgroundColor = 'lightgreen';
            setTimeout(function () {
                nextQuestion();
            }, 100);
        }
    </script>
@endsection