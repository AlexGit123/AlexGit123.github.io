@extends('layout')



@section('content')
    <div style="text-align: center; background-color: white; height: 550px">
        <h1>Overall View for Grades</h1>

        <ol>
            @foreach($grades as $grade)
                <details style="padding-bottom: 10px">


                    <summary>
                        <a href="/faqs/{{$grade->id}}">{{ $grade->course_name}}</a>
                    </summary>

                    <p>
                        {{ $grade->test_name}}
                    </p>

                    <p>
                        {{ $grade->best_grade}}
                    </p>

                </details>

            @endforeach
        </ol>
    </div>
@endsection

