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
        <tr>
            <th colspan="5"><h2>Study Progress 2021/22</h2></th>
        </tr>
        <tr>
            <th colspan="5">Quartile #1</th>
        </tr>
        <tr>
            <th>Module</th>
            <th>Assignment</th>
            <th>EC</th>
            <th>Progress</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>Programme and Career Orientation </td>
            <td>Assessment</td>
            <td>2.5</td>
            <td class="completed">Complete</td>
            <td>9.3</td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>Written Exam</td>
            <td>5</td>
            <td class="completed">Complete</td>
            <td>9.3</td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>Case Study</td>
            <td>5</td>
            <td class="completed">Complete</td>
            <td>10.0</td>
        </tr>
        <!-- Quartile #2  Table Start -->
        <tr>
            <th colspan="5">Quartile #2</th>
        </tr>
        <tr>
            <th>Module</th>
            <th>Assignment</th>
            <th>EC</th>
            <th>Progress</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="2">Object Orientated Programming</td>
            <td>Case Study</td>
            <td rowspan="2">10</td>
            <td  rowspan="2"class="completed">Complete</td>
            <td rowspan="2">7.75</td>
        </tr>
        <tr>
            <td>Project</td>
        </tr>
        <!-- Quartile #3  Table Start-->
        <tr>
            <th colspan="5">Quartile #3</th>
        </tr>
        <tr>
            <th>Module</th>
            <th>Assignment</th>
            <th>EC</th>
            <th>Progress</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>Framework Development 1</td>
            <td>Case Study</td>
            <td>5</td>
            <td class="inprogress">In Progress</td>
            <td>TBA</td>
        </tr>
        <tr>
            <td rowspan="3">Framework Project 1</td>
            <td>Project</td>
            <td rowspan="3">7.5</td>
            <td rowspan="3" class="inprogress">In Progress</td>
            <td rowspan="3">TBA</td>
        </tr>
        <tr>
            <td>Assessment</td>
        </tr>
        <tr>
            <td>Report</td>
        </tr>
        <!-- Quartile #4 Table Start -->
        <tr>
            <th colspan="5">Quartile #4</th>
        </tr>
        <tr>
            <th>Module</th>
            <th>Assignment</th>
            <th>EC</th>
            <th>Progress</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="3">Framework Project 2</td>
            <td>Portfolio</td>
            <td rowspan="3">10</td>
            <td rowspan="3" class="incomplete">Not Completed</td>
            <td rowspan="3">TBA</td>
        </tr>
        <tr>
            <td>Project</td>
        </tr>
        <tr>
            <td>Assessment</td>
        </tr>
        <tr>
            <th colspan="5">Full Year</th>
        </tr>
        <tr>
            <th>Module</th>
            <th>Assignment</th>
            <th>EC</th>
            <th>Progress</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>Personal Professional Development</td>
            <td>Portfolio</td>
            <td>12.5</td>
            <td class="inprogress">In Progress</td>
            <td>TBA</td>
        </tr>
        <tr>
            <td>IT Personality 1</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td class="inprogress">In Progress</td>
            <td>TBA</td>
        </tr>
        <tr>
            <td>IT Personality 2</td>
            <td>Portfolio</td>
            <td>1.25</td>
            <td class="inprogress">In Progress</td>
            <td>TBA</td>
        </tr>
        <tr>
            <td>NL Basic 01 - Dutch A1</td>
            <td>Written Exam</td>
            <td>1.25</td>
            <td class="completed">Complete</td>
            <td>8.6</td>
        </tr>
    </table>
    <div id="current-progress">
        <h2>Current Progress</h2>
        <progress max="60" value="0"></progress>
        </br>
        <div id="current-ec">
            <h3>&#8657; 0 EC</h3>
        </div>
        <div id="end-ec">
            <h3>60EC</h3>
        </div>
    </div>
@endsection


