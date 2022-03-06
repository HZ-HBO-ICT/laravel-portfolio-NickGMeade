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
    <h2>Create a new Blog Post</h2>
    <br>
    <form action="{{route('articles.store')}}" method="POST">
        @csrf
        <div class="field">
            <label for="title"> <h3>Title</h3> </label>
            <div class="control">
                <textarea type="text"
                          name="title"
                          id="title"
                          class="@error('title') is-danger @enderror">{{old('title')}}</textarea>

                @error('title')
                <p class="is-danger-text">{{$errors->first('title')}}</p>
                @enderror

            </div>
        </div>
        <br>

        <div class="field">
            <label for="excerpt"> <h3>Excerpt</h3> </label>
            <div class="control">
                <textarea name="excerpt"
                          id="excerpt"
                          rows="2"
                          cols="50"
                          class="@error('excerpt') is-danger @enderror">{{old('excerpt')}}</textarea>

                @error('excerpt')
                <p class="is-danger-text">{{$errors->first('excerpt')}}</p>
                @enderror
            </div>
        </div>
        <br>

        <div class="field">
            <label for="body"> <h3>Body</h3> </label>
            <div class="control">
                <textarea name="body"
                          id="body"
                          rows="10"
                          cols="50"
                          class="@error('body') is-danger @enderror">{{old('body')}}</textarea>

                @error('body')
                <p class="is-danger-text">{{$errors->first('body')}}</p>
                @enderror
            </div>
        </div>
        <br>

        <div class="field">
            <label for="link"><h3>Link Ref</h3></label>
            <div class="control">
                <textarea type="text"
                          name="link"
                          id="link"
                          placeholder="E.g., My-Post-1"
                          class="@error('link') is-danger @enderror">{{old('link')}}</textarea>

                @error('link')
                <p class="is-danger-text">{{$errors->first('link')}}</p>
                @enderror
            </div>
        </div>
        <br>
        <button type="submit"><h3>Submit</h3></button>
    </form>
@endsection
