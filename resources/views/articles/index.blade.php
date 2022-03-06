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
                <a href="{{route('articles.show', $article)}}">
                    <h2>{{$article->title}}</h2>
                    <h3>{{Str::limit($article->created_at, 10)}}</h3>
                </a>
            </div>
            <p>
                {!! $article->excerpt !!}
                </br>
                <a href="{{route('articles.show', $article)}}">Read More</a>
            </p>
        </div>
        </br>
    @endforeach
@endsection

@section('paginate')
    {{ $articles->links() }}
@endsection
