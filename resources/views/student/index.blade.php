@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Address</th>
                <th>Dob</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection