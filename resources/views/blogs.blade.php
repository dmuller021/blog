@extends('layouts.app')

@section('content')

    <div class="padding-bottom">

{{--        <div class="row cols-2">--}}
{{--            <td>asd</td>--}}
{{--        </div>--}}
    <div class="card">
            <div class="card-body">
                <div class="blog_title">
                    <h1>Introduction</h1>
                </div>
                    <div class="blog_content">
                        <p maxLength="20">Dapibus platea dui odio morbi, lorem dictum placerat finibus ligula cursus arcu sociosqu. Egestas nec condimentum sagittis eu eros.</p>
                    </div>
            </div>
    </div>
    </div>

    <div class="padding-bottom">
        <div class="card">
            <div class="card-body">
                <div class="blog_title">
                    <h1>Learning</h1>
                </div>
                <div class="blog_content">
                    <p maxLength="20">Dapibus platea dui odio morbi, lorem dictum placerat finibus ligula cursus arcu sociosqu. Egestas nec condimentum sagittis eu eros.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
