@extends('layouts.app')

@section('title')
    Courses
@endsection

@section('content')
    <a href="{{ action('CourseController@create') }}">
        <button class="primary">Create</button>
    </a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td></td>
                        <td>{{ $course->name }}</td>
                        <td>
                            <a href="{{ action('CourseController@edit', ['course' => $course->_id]) }}">Update</a>
                            <a href="javascript:void(0)" onclick="document.getElementById('delete-{{ $course->_id }}').submit()">Delete</a>
                            <form id="delete-{{ $course->_id }}"action="{{ action('CourseController@destroy', ['course' => $course->_id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection