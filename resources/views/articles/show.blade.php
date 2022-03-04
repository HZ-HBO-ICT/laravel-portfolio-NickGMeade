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
            <h2>{{$article->title}}</h2>
            <h3>{{Str::limit($article->created_at, 10)}}</h3>
        </div>
        <p>
            {!! $article->body !!}
            </br>
            <a class="go-back" href="{{url()->previous()}}">Go Back</a>
                {{-- url()->previous() redirects the user back to the previous page they were on before opening this
                page, eg if they accessed this link from the index/welcome page then it will return to there, if from
                the blog page then they will go back to the blog page, etc. --}}
        </p>
    </div>
    </br>
    </div>
@endsection
