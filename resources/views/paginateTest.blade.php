@extends('layouts.main')

@section('content')
    @foreach($questions as $q)
        {{$q->QuestionID}}<br>
    @endforeach
    {{$questions->links()}}
@endsection