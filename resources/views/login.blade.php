@extends('layouts.app')

@section('content')


    <div class="padding-card">

        {{--        <div class="row cols-2">--}}
        {{--            <td>asd</td>--}}
        {{--        </div>--}}
        <div class="card" style="width: 30rem;">
            <div class="card-body-test">
                <div class="blog_title">
                    <h1>Login</h1>
                </div>
                <br>

                <div class="blog_content">
                    <p>ID or email:</p>
                    <input name="id" ></input>
                </div>

                <br>
                <div class="blog_content">
                    <p>Password:</p>
                    <input name="id" type="password"></input>
                </div>

                <br>
                    <p>Don't have an account? <a href="{{ url('/registration') }}">Sign here</a></p>
                <button type="button" class="btn btn-dark">Login</button>
                <br>
                <p></p>
            </div>


        </div>
    </div>

    {{--        <div class="nav-wrapper">--}}
    {{--            <nav>--}}
    {{--                <a href="home" class="hover-this"><span>Home</span></a>--}}
    {{--                <a href="home" class="hover-this"><span>Search</span></a>--}}
    {{--                <a href="home" class="hover-this"><span>Login</span></a>--}}
    {{--                <a href="home" class="hover-this"><span>Contact</span></a>--}}
    {{--                <div class="cursor"></div>--}}
    {{--            </nav>--}}
    {{--        </div>--}}
@endsection
