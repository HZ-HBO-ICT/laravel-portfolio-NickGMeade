@extends('layout')

@section('title')
    FAQ
@endsection

@section('header')
    Frequently Asked Questions
@endsection

@section('div-type')
    faq-article
@endsection

@section('content')
        <div class="container">
            @foreach($faqs as $post)
                <div class="{{$post->class}}">
                    <h3>{{$post->id}}) {{$post->question}}</h3>
                    <p>
                        <!-- The !! symbols remove the html special characters
                             restriction imposed by echo, letting me use the html
                             code within the database-->
                        {!! $post->answer !!}
                    </p>
                </div>
            @endforeach
        </div>
@endsection
