@extends('layouts.app')

@section('content')
    <form action="{{ action('StudentController@store') }}" method="POST">
        @include('student._form')

        <button type="submit">Create</button>
    </form>

@endsection