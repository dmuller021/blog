@extends('layouts.app')

@section('content')
<div class="padding-bottom">
 <a href="blogs/create"
    class="btn btn-primary"> Post a new blog</a>
</div>
    @foreach($blogs as $blog)
        <div class="padding-bottom">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        <a class="btn btn-primary" href="blogs/{{ $blog->id }}/edit">
                            Edit
                        </a>

                        <form action="/blogs/{{ $blog->id }}" class="pt-3" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                    <div class="blog_title">
                        <h1>{{ $blog->blog_title }}</h1>
                    </div>
                    <div class="blog_content">
                        <p maxLength="20">{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
