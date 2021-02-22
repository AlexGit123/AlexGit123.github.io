@extends('layout')

@section('content')
    <div>
        <div>
            <h1>Update Grade</h1>

            <form method="POST" action="/grades/{{$grade->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label class="" for="course_name">Course Name</label>


                    <div class="">
                        <input class="" type="text" name="course_name" id="course_name" value="{{$grade->course_name}}">
                    </div>
                </div>


                <div class="">
                    <label class="" for="test_name">Test Name</label>


                    <div class="">
                        <textarea class="" name="test_name" id="test_name">{{$grade->test_name}}</textarea>
                    </div>

                </div>

                <div class="">
                    <label class="" for="best_grade">Best Grade</label>


                    <div class="">
                        <textarea class="" name="best_grade" id="best_grade">{{$grade->best_grade}}</textarea>
                    </div>

                </div>

                <div>
                    <label class="" for="lowest_passing_grade">Lowest Passing Grade</label>

                    <div>
                        <textarea class="" name="lowest_passing_grade" id="lowest_passing_grade">{{$grade->lowest_passing_grade}}</textarea>
                    </div>

                </div>


                <div class="">

                    <div>
                        <button class="" type="submit">Submit</button>
                    </div>

                </div>

            </form>

            <form method="POST" action="/grades/{{$grade->id}}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </div>
    </div>
@endsection
