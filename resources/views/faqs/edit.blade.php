@extends('layout')

@section('content')
    <div>
        <div>
            <h1>Update FAQ</h1>

            <form method="POST" action="/faqs/{{$faq->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label class="" for="question">Question</label>


                    <div class="">
                        <input class="" type="text" name="question" id="question" value="{{$faq->question}}">
                    </div>
                </div>


                <div class="">
                    <label class="" for="answer">Answer</label>


                    <div class="">
                        <textarea class="" name="answer" id="answer">{{$faq->answer}}</textarea>
                    </div>

                </div>


                <div>
                    <label class="" for="link">Link</label>

                    <div>
                        <textarea class="" name="link" id="link">{{$faq->link}}</textarea>
                    </div>

                </div>


                <div class="">

                    <div>
                        <button class="" type="submit">Submit</button>
                    </div>

                </div>

            </form>

            <form method="POST" action="/faqs/{{ $faq->id}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </div>
    </div>
@endsection
