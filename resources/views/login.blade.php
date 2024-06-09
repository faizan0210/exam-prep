<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h2>Login</h2>
<form method="POST" action="/login">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>
@endsection
