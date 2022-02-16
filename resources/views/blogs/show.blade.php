@extends ('layout')

@section('title')
    Blog
@endsection

@section('header')
    Blog
@endsection

@section('div-type')
    blog-article
@endsection

@section ('content')
    <div class="blog-post">
        <div class="blog-title">
            <a href="/blogs/{{$article->link}}">
                <h2>{{$article->title}}</h2>
                <h3>{{Str::limit($article->created_at, 10)}}</h3>
            </a>
        </div>
        <p>
            {!! $article->body !!}
            </br>
            <a class="go-back" href="/blog">Go Back</a>
        </p>
    </div>
    </br>
    </div>
@endsection
