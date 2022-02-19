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
    @foreach($articles as $article)
        <div class="blog-post blog-link">
            <div class="blog-title">
                <a href="/blogs/{{$article->id}}">
                    <h2>{{$article->title}}</h2>
                    <h3>{{Str::limit($article->created_at, 10)}}</h3>
                </a>
            </div>
            <p>
                {!! $article->excerpt !!}
                </br>
                <a href="/blogs/{{$article->id}}">Read More</a>
            </p>
        </div>
        </br>
    @endforeach
@endsection
