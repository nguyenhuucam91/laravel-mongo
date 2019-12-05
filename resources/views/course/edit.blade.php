@extends('layouts.app')

@section('content')
    <form action="{{ action('CourseController@update', ['course' => $course->_id]) }}" method="POST">
        @method('PUT')
        @include('course._form')

        <button type="submit">Update</button>
    </form>

@endsection