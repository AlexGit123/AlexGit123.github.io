@extends('layout')

@section('content')
    <div>
        <div>
            <h1>New FAQ</h1>

            <form method="POST" action="/faqs">
                @csrf

                <div>
                    <label class="" for="question">Question</label>


                    <div class="">
                        <input class="" type="text" name="question" id="question">
                    </div>
                </div>


                <div class="">
                    <label class="" for="answer">Answer</label>


                    <div class="">
                        <textarea class="" name="answer" id="answer"></textarea>
                    </div>

                </div>


                <div>
                    <label class="" for="link">Link</label>

                    <div>
                        <textarea class="" name="link" id="link"></textarea>
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
