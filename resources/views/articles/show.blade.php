@extends('layout')

@section('content')

    <div style="text-align: center; line-height: 3em; padding-left: 20px; padding-right: 20px; padding-bottom: 20px">

    <h1>{{$article->title}}</h1>

    <p>{{$article->body}}</p>

    </div>

@endsection

