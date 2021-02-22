@extends('layout')

@section('content')

<div style="text-align: center; line-height: 3em; padding-left: 20px; padding-right: 20px; padding-bottom: 20px">

  <a href="/articles/{{$article->id}}">
    <h1>{{$article->title}}</h1>
  </a>

   <p>{{$article->excerpt}}</p>

   <p>{{$article->body}}</p>

</div>
@endsection

