@extends('layouts.main')

@section('title')
    {{$examType}}
@endsection
@section('content')
    <div class="container">
        <div class="examTypeDescription">
            <div class="row">
                {{--Get $examType from Route--}}
                <div class="col-md-4">
                    <img src="{{asset('public/images/word.png')}}" class="img-responsive" height="100%" width="100%">
                </div>
                <div class="col-md-8">
                    <h3 class="text-center">{{$examType.' - '.$examTypeID}}</h3>
                    <p>The position property specifies the type of positioning method used for an element (static,
                        relative,
                        absolute, fixed, or sticky).</p>
                    <p>The position property specifies the type of positioning method used for an element (static,
                        relative,
                        absolute, fixed, or sticky).</p>
                    <p>The position property specifies the type of positioning method used for an element (static,
                        relative,
                        absolute, fixed, or sticky).</p>
                    <hr width="70%">
                    <p class="text-center">Số bài thi theo dạng đề này: 10</p>
                </div>
            </div>
        </div>
        <ul class="examList">
            <li class="examInfo row">
                <div class="col-md-3">
                    <img src="{{asset('public/images/word.png')}}" class="examThumbnail" height="180" width="100%">
                </div>
                <div class="col-md-6">
                    <div class="examDescription">
                        <p>The position property specifies the type of positioning method used for an element (static,
                            relative,
                            absolute, fixed, or sticky).</p>
                    </div>
                    <hr width="80%">
                    <p class="text-center">☷ Lượt thi: 142 ✉ Bình luận: 5</p>
                </div>
                <div class="col-md-3 userStatistic">
                    <h4>Điểm cao nhất</h4>
                    <h2>32/40</h2>
                    <h4>Lần thi: 4</h4>
                </div>
            </li>
        </ul>
    </div>
@endsection