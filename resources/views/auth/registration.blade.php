@extends('layouts.app')

@section('content')


    <div class="padding-card">

        {{--        <div class="row cols-2">--}}
        {{--            <td>asd</td>--}}
        {{--        </div>--}}
        <div class="card" style="width: 30rem;">
            <form action="{{ route('auth.create') }}" method="POST">
                @csrf
            <div class="card-body-test">
                <div class="blog_title">
                    <h1>Registration</h1>
                </div>
                <br>

                <div class="blog_content">
                    <p>Name:</p>
                    <input name="name" value="{{ old('name') }}">
                    <span class="error">@error('name'){{ $message }} @enderror</span>
                </div>

                <br>

                <div class="blog_content">
                    <p>Email:</p>
                    <input name="email" value="{{ old('email') }}" >
                    <span class="error">@error('email'){{ $message }} @enderror</span>
                </div>

                <br>
                <div class="blog_content">
                    <p>Password:</p>
                    <input name="password" type="password" value="{{ old('password') }}"></input>
                    <span class="error">@error('password'){{ $message }} @enderror</span>
                </div>

                <br>
                <button type="submit" class="btn btn-dark">Register</button>
                <br>
                <p></p>
            </div>
            </form>


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
