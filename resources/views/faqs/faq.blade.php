@extends('layout')



@section('content')
<div style="text-align: center; background-color: white; height: 550px">
    <h1>Frequently Asked Questions</h1>

    <ol>
        @foreach($faqs as $faq)
            <details style="padding-bottom: 10px">

                <summary>
                    {{ $faq->question}}
                </summary>

                <p>
                    {{ $faq->answer}}
                </p>

                <p>
                    {{ $faq->link}}
                </p>

            </details>

        @endforeach
    </ol>
    
</div>
@endsection
