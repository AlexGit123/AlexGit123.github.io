@extends('layout')

@section('content')

    @foreach($articles as $article)
    <div>
 <h1>
<a href="/articles/{{$article->id}}">
    {{$article->title}}
</a>
 </h1>

        <p>{{$article->body}}</p>
    </div>
    @endforeach
@endsection
