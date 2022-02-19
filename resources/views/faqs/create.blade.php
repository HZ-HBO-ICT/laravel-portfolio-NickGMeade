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
    <!-- FAQ Form -->
    <h2>Create a new FAQ Post</h2>
    <br>
    <form action="/faq" method="post">
        @csrf
        <div class="field">
            <label for="question"><h3>Question</h3></label>
            <div>
                <input type="text" id="question" name="question">
            </div>
        </div>
        <br>
        <div class="field">
            <label for="answer"><h3>Answer</h3></label>
            <div>
                <textarea name="answer" id="answer" rows="5" cols="50"> </textarea>
            </div>
        </div>
        <br>
        <div class="field">
            <label for="class"><h3>Colour</h3></label>
            <div>
                <input type="radio" id="class_type" name="class_type" value="box yellow" checked>
                <label for="class">Yellow</label><br>
                <input type="radio" id="class_type" name="class_type" value="box blue">
                <label for="class">Blue</label><br>
                <input type="radio" id="class_type" name="class_type" value="box pink">
                <label for="class">Pink</label><br>
            </div>
        </div>
        <br>
        <button type="submit"><h3>Submit</h3></button>
    </form>
@endsection
