@extends('layout')

@section('content')
    <div>
        <div>
            <h1>New Grade</h1>

            <form method="POST" action="/grades">
                @csrf

                <div>
                    <label class="" for="course_name">Course Name</label>


                    <div class="">
                        <input class="" type="text" name="course_name" id="course_name">
                    </div>
                </div>


                <div class="">
                    <label class="" for="test_name">Test Name</label>


                    <div class="">
                        <textarea class="" name="test_name" id="test_name"></textarea>
                    </div>

                </div>


                <div>
                    <label class="" for="best_grade">Best Grade</label>

                    <div>
                        <textarea class="" name="best_grade" id="best_grade"></textarea>
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
