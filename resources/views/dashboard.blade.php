@extends('layout')

@section('title')
    Dashboard
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
    <table>
        <thead>
        <tr>
            <th colspan="5"><h2>Study Progress 2021/22</h2></th>
        </tr>
        @foreach($grades as $grade)
            @if($previousQuartile !== $grade->quartile)
                @php $previousQuartile = $grade->quartile @endphp
                        <tr>
                            <th colspan="5"> {{$grade->quartile}}</th>
                        </tr>
                        <tr>
                            <th>Course</th>
                            <th>EC</th>
                            <th>Exam</th>
                            <th>Status</th>
                            <th>Grade</th>
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


