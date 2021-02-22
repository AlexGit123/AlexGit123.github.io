@extends('layout')

@section('content')

    <div style="text-align: center; line-height: 3em; padding-left: 20px; padding-right: 20px; padding-bottom: 20px">


        <h1>{{$grade->course_name}}</h1>


        <p>{{$grade->test_name}}</p>

        <p>{{$grade->best_grade}}</p>

    </div>
@endsection
