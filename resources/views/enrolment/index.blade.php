@extends('layouts.app')

@section('title')
    Students
@endsection

@section('content')
    <a href="{{ action('EnrolmentController@create') }}">
        <button class="primary">Create</button>
    </a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Student</th>
                <th>Course</th>
                <th>Mark</th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach($enrolments as $enrolment)
                    <tr>
                        <td></td>
                        <td>{{ $enrolment->student->first_name.' '.  $enrolment->student->last_name }}</td>
                        <td>{{ $enrolment->course->name }}</td>
                        <td>{{ $enrolment->mark }}</td>
                        <td>
                            <a href="{{ action('EnrolmentController@edit', ['enrolment' => $enrolment->_id]) }}">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection