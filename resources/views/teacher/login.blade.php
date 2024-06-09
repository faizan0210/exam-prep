<!-- resources/views/teacher/login.blade.php -->
@extends('layouts.app')

@section('title', 'Teacher Login')

@section('content')
<h2>Teacher Login</h2>
<form method="POST" action="{{ route('teacher.login') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>
@endsection
