@extends('layouts.app')

@section('title', 'Teacher Dashboard')

@section('content')
<h2>Teacher Dashboard</h2>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->user->name }}</td>
                <td>
                    <form method="POST" action="{{ route('teacher.delete.devices') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $student->user_id }}">
                        <button type="submit" class="btn btn-danger btn-sm">Delete Devices</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<form method="POST" action="{{ route('teacher.logout') }}">
    @csrf
    <button type="submit" class="btn btn-secondary btn-block">Logout</button>
</form>
@endsection
