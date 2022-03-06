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
    <!-- For updating the grade's colour index, use the classes 'completed', 'inprogress' or 'incomplete' -->
    <!-- Unused cells & tables are currently hidden, to unhide any relevant cells remove the 'hidden' and 'hidden' classes -->
    <!-- Quartile #1 Table Start -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <table>
        <thead>
        <tr>
            <th colspan="6"><h2>Study Progress 2021/22</h2>
                <form method="GET" action="{{route('grade.create')}}">
                    @csrf
                    <button id="new" type="submit"><h3>Add Grade</h3></button>
                </form>
            </th>
        </tr>
        @foreach($grades as $grade)
            @if($previousQuartile !== $grade->quartile)
                @php $previousQuartile = $grade->quartile @endphp
                        <tr>
                            <th colspan="6">Quartile: {{$grade->quartile}}</th>
                        </tr>
                        <tr>
                            <th>Course</th>
                            <th>Exam</th>
                            <th>EC</th>
                            <th>Status</th>
                            <th>Grade</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($grades as $grade)
                        @if($previousQuartile === $grade->quartile)
                            <tr>
                                <td>{{$grade->course_name}}</td>
                                <td>{{$grade->test_name}}</td>
                                <td>{{$grade->ec}}</td>
                                <td class='{{$grade->class}}'>
                                    @if($grade->class === 'completed')
                                        Completed
                                    @elseif($grade->class === 'incomplete')
                                        Unsuccessful
                                    @else
                                        In Progress
                                    @endif
                                </td>
                                <td>
                                    @if ($grade->best_grade != null)
                                        {{$grade->best_grade}}
                                    @else
                                        0
                                    @endif
                                </td>
                                <td>
                                    <form method="GET" action="{{route('grade.edit', $grade)}}">
                                        @csrf
                                        <button id="edit" type="submit"><h3>Edit</h3></button>
                                    </form>
                                    <form method="POST" action="{{route('grade.destroy', $grade)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button id="deleteBtn" type="submit"><h3>Delete</h3></button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
            @endif
        @endforeach
    </table>
    <div id="current-progress">
        <h2>Current Progress</h2>
        <progress max="60" value="{{$currentECs}}"></progress>
        </br>
        <div style="text-align: center;">
            <h3>Current Total: {{$currentECs}} / 60EC</h3>
        </div>
    </div>
@endsection


