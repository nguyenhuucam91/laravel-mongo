@extends('layouts.app')

@section('content')
    <form action="{{ action('StudentController@update', ['student' => $student->_id]) }}" method="POST">
        @method('PUT')
        @include('student._form')

        <button type="submit">Update</button>
    </form>

@endsection