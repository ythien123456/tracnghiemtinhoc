@extends('layouts.main')

@section('content')
    @if(isset($exam))
        @foreach($exam as $e)
            {{$e->TypeTitle}}
            @endforeach
    @endif
@endsection