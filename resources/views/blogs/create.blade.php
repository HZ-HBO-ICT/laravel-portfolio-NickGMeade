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
    <!-- Blog Form -->
    <h2>Create a new Blog Post</h2>
    <br>
    <form action="/blog" method="post">
        @csrf
        <div class="field">
            <label for="title"> <h3>Title</h3> </label>
            <div class="control">
                <input type="text" name="title" id="title">
            </div>
        </div>
        <br>
        <div class="field">
            <label for="excerpt"> <h3>Excerpt</h3> </label>
            <div class="control">
                <textarea name="excerpt" id="excerpt" rows="2" cols="50"> </textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="body"> <h3>Body</h3> </label>
            <div class="control">
                <textarea name="body" id="body" rows="10" cols="50"> </textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="link"><h3>Link Ref</h3></label>
            <div class="control">
                <input type="text" name="link" id="link" placeholder="E.g., My-Post-1">
            </div>
        </div>
        <br>
        <button type="submit"><h3>Submit</h3></button>
    </form>
@endsection
