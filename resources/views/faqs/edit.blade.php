@extends('layout')

@section('title')
    FAQ
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/formStyle.css" />
@endsection

@section('header')
    Frequently Asked Questions
@endsection

@section('div-type')
    faq-article
@endsection

@section('content')
    <!-- FAQ Form -->
    <h2>Create a new FAQ Post</h2>
    <br>
    <form action="{{route('faq.update', $faq)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="question"><h3>Question</h3></label>
            <div>
                <textarea type="text" id="question" name="question">{{$faq->question}}</textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="answer"><h3>Answer</h3></label>
            <div>
                <textarea name="answer" id="answer" rows="5" cols="50">{{$faq->answer}}</textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="class"><h3>Colour</h3></label>
            <div class="radioBtn">
                <input type="radio" class="class_type" name="class_type" value="box yellow" checked>
                <label for="class">Yellow</label><br>
                <input type="radio" class="class_type" name="class_type" value="box blue">
                <label for="class">Blue</label><br>
                <input type="radio" class="class_type" name="class_type" value="box pink">
                <label for="class">Pink</label><br>
            </div>
        </div>
        <br>
        <button type="submit"><h3>Submit</h3></button>
    </form>
    <form method="POST" action="{{route('faq.destroy', $faq)}}">
        @csrf
        @method('DELETE')
        <button id="deleteBtn" type="submit"><h3>Delete</h3></button>
    </form>
@endsection
