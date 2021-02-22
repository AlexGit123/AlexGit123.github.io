@extends('layout')

@section('content')
    <div>
        <div>
            <h1>Update Article</h1>

            <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label class="" for="title">Title</label>


                    <div class="">
                        <input class="input @error('title') is-danger @enderror"
                               type="text"
                               name="title"
                               id="title"
                               value="{{$article->title}}">

                        @error('title')
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>


                <div class="">
                    <label class="" for="excerpt">Excerpt</label>


                    <div class="">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>

                        @error('excerpt')
                            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>

                </div>


                <div>
                    <label class="" for="body">Body</label>

                    <div>
                        <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body">{{$article->body}}</textarea>

                        @error('excerpt')
                            <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>

                </div>


                <div class="">

                    <div>
                        <button class="button" type="submit">Submit</button>
                    </div>

                </div>

            </form>

            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('DELETE')
                <button class="button" type="submit">Delete</button>
            </form>

        </div>
    </div>
@endsection
