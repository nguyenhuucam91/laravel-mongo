@extends('layouts.app')

@section('content')
    <form action="{{ action('CourseController@store') }}" method="POST">
        @include('course._form')

        <button type="submit">Create</button>
    </form>

@endsection