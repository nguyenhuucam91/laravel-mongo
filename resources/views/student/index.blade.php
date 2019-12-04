@extends('layouts.app')

@section('content')
    <a href="{{ action('StudentController@create') }}">
        <button class="primary">Create</button>
    </a>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Address</th>
                <th>Dob</th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td></td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>
                            <a href="{{ action('StudentController@edit', ['student' => $student->_id]) }}">Update</a>
                            <a href="javascript:void(0)" onclick="document.getElementById('delete-{{ $student->_id }}').submit()">Delete</a>
                            <form id="delete-{{ $student->_id }}"action="{{ action('StudentController@destroy', ['student' => $student->_id]) }}" method="POST">
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