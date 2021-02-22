@extends('layout')

@section('content')

    @foreach($articles as $article)

    <div>
 <h1>
    <a href="{{route('articles.show', $article)}}">
        {{$article->title}}
    </a>
 </h1>

     <p>{{$article->body}}</p>

    </div>
    @endforeach
@endsection
