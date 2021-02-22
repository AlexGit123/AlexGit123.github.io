@extends('layout')

@section('content')

    <div style="text-align: center; line-height: 3em; padding-left: 20px; padding-right: 20px; padding-bottom: 20px">


        <h1>{{$faq->question}}</h1>


        <p>{{$faq->answer}}</p>

        <p>{{$faq->link}}</p>

    </div>
@endsection
