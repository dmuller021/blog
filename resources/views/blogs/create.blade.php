@extends('layouts.app')

@section('content')


    <div class="padding-card">
        <form action="/blogs" method="POST">
            @csrf
        {{--        <div class="row cols-2">--}}
        {{--            <td>asd</td>--}}
        {{--        </div>--}}
        <div class="card" style="width: 30rem;">
            <div class="card-body-test">
                <div class="blog_title">
                    <h1>Add a blog</h1>
                </div>
                <br>

                <div class="blog_content">
                    <p>Blog title:</p>
                    <input type="text" name="blog_title" ></input>
                </div>

                <br>
                <div class="blog_content">
                    <p>Blog description:</p>
                    <textarea class="textbox" name="blog_description"></textarea>
                </div>

                <br>
                <button type="submit" class="btn btn-dark">Add blog</button>
                <br>
                <p></p>
            </div>

        </div>
        </form>
    </div>
@endsection

