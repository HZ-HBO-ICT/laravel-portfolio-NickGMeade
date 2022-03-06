@extends('layout')

@section('title')
    Dashboard
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="/css/formStyle.css" />
@endsection

@section('header')
    Dashboard
@endsection

@section('div-type')
    dashboard-article
@endsection

@section('content')
    <!-- Form to add a new grade to the table -->
    <!-- Grade Form -->
    <h2>Add a new Grade</h2>
    <form action="{{route('grade.store')}}" method="POST">
        @csrf
        <div class="field">
            <label for="quartile"><h3>Quartile</h3></label>
            <div>
                <input type="text"
                       id="quartile"
                       name="quartile"
                       value="{{old('quartile')}}"
                       placeholder="1, 2, 3, 4 or All">
                @error('quartile')
                <p class="is-danger-text">{{$errors->first('quartile')}}</p>
                @enderror
            </div>
        </div>
        <br>
        <div class="field">
            <label for="course_name"><h3>Course</h3></label>
            <div>
                <input type="text"
                       id="course_name"
                       name="course_name"
                       value="{{old('course_name')}}"
                       placeholder="Course Name">
                @error('course_name')
                <p class="is-danger-text">{{$errors->first('course_name')}}</p>
                @enderror
            </div>
        </div>
        <br>
        <div class="field">
            <label for="test_name"><h3>Exam</h3></label>
            <div>
                <input type="text"
                       id="test_name"
                       name="test_name"
                       value="{{old('test_name')}}"
                       placeholder="Test Type">
                @error('test_name')
                <p class="is-danger-text">{{$errors->first('test_name')}}</p>
                @enderror
            </div>
        </div>
        <br>
        <div class="field">
            <label for="ec"><h3>EC</h3></label>
            <div>
                <input type="number"
                       min="0"
                       max="10"
                       step="0.1"
                       id="ec"
                       name="ec"
                       value="{{old('ec')}}"
                       placeholder="0.0">
                @error('ec')
                <p class="is-danger-text">{{$errors->first('ec')}}</p>
                @enderror
            </div>
        </div>
        <br>
        <div class="field">
            <label for="best_grade"><h3>Grade</h3></label>
            <div>
                <input type="number"
                       min="0"
                       max="10"
                       step="0.1"
                       id="best_grade"
                       name="best_grade"
                       value="{{old('best_grade')}}"
                       placeholder="0.0">
                @error('best_grade')
                <p class="is-danger-text">{{$errors->first('best_grade')}}</p>
                @enderror
            </div>
        </div>
        <br>
        <button type="submit"><h3>Submit</h3></button>
    </form>
@endsection
