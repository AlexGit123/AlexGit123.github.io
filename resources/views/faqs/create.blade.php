@extends('layout')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <div>
        <div>
            <h1>New FAQ</h1>

            <form method="POST" action="/faqs">
                @csrf

                <div>
                    <label class="" for="question">Question</label>


                    <div class="field">
                        <input class="input @error('question') is-danger @enderror"
                               type="text"
                               name="question"
                               id="question"
                               value="{{old('question')}}">

                        @error('question')
                            <p class="help is-danger">{{$errors->first('question')}}</p>
                        @enderror
                    </div>
                </div>


                <div class="">
                    <label class="" for="answer">Answer</label>

                    <div class="field">
                        <textarea
                            class="textarea @error('answer') is-danger @enderror"
                            name="answer"
                            id="answer"> {{old('answer')}} </textarea>

                        @error('answer')
                            <p class="help is-danger">{{$errors->first('answer')}}</p>
                        @enderror
                    </div>

                </div>


                <div class="">
                    <label class="" for="link">Link</label>

                    <div class="field">
                        <textarea
                            class="textarea @error('link') is-danger @enderror"
                            name="link"
                            id="link"> {{old('link')}} </textarea>

                        @error('link')
                            <p class="help is-danger">{{$errors->first('link')}}</p>
                        @enderror
                    </div>

                </div>


                <div class="">

                    <div>
                        <button class="" type="submit">Submit</button>
                    </div>

                </div>

            </form>

        </div>
    </div>
@endsection
