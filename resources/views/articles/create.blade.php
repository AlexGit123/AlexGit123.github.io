@extends('layout')

@section('content')
<div>
    <div>
        <h1>New Article</h1>

        <form method="POST" action="/articles">
            @csrf

            <div>
                <label class="" for="">Title</label>


                    <div class="">
                        <input class="" type="text" name="title" id="title">
                    </div>
            </div>


            <div class="">
                <label class="" for="excerpt">Excerpt</label>


                <div class="">
                    <textarea class="" name="excerpt" id="excerpt"></textarea>
                 </div>

            </div>


            <div>
                <label class="" for="body">Body</label>

                <div>
                    <textarea class="" name="body" id="body"></textarea>
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
