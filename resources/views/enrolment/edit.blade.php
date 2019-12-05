@extends('layouts.app')

@section('content')
    <form action="{{ action('EnrolmentController@update', ['enrolment' => $enrolment->_id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="first_name">Student Name</label>
            <select name="student_id">
                @foreach($students as $student)
                    <option value="{{ $student->_id }}" {{ $enrolment->student->_id === $student->_id ? 'selected' : ''}}>
                        {{ $student->first_name.' '.$student->last_name }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label for="last_name">Course</label>
            <select name="course_id">
            @foreach($courses as $course)
                <option value="{{ $course->_id }}" {{ $enrolment->course->_id === $course->_id ? 'selected' : ''}}>
                    {{ $course->name }}
                </option>
            @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label for="address">Mark</label>
            <input type="text" type="number" min="0" max="10" name="mark" value="{{ $enrolment->mark }}"/>
        </div>

        <button type="submit">Update</button>
    </form>

@endsection