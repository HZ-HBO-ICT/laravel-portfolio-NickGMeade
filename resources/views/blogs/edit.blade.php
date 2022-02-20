@extends ('layout')

@section('title')
    Blog
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/formStyle.css" />
@endsection

@section('header')
    Blog
@endsection

@section('div-type')
    blog-article
@endsection

@section ('content')
    <!-- Blog Form -->
    <h2>Update Blog Post</h2>
    <br>
    <form action="/blogs/{{$article->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="title"> <h3>Title</h3> </label>
            <div class="control">
                <textarea type="text" name="title" id="title">{{$article->title}}</textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="excerpt"> <h3>Excerpt</h3> </label>
            <div class="control">
                <textarea name="excerpt" id="excerpt" rows="2" cols="50">{{$article->excerpt}}</textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="body"> <h3>Body</h3> </label>
            <div class="control">
                <textarea name="body" id="body" rows="10" cols="50">{{$article->body}}</textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="link"><h3>Link Ref</h3></label>
            <div class="control">
                <textarea type="text" name="link" id="link" disabled>{{$article->link}}</textarea>
            </div>
        </div>
        <br>
        <button type="submit"><h3>Submit</h3></button>
    </form>
    <form method="POST" action="/blogs/{{$article->id}}">
        @csrf
        @method('DELETE')
        <button id="deleteBtn" type="submit"><h3>Delete</h3></button>
    </form>
@endsection
