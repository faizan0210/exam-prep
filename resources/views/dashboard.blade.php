<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2>Dashboard</h2>

@if(session('success'))
    <div class="alert alert-success">
        {!! session('success') !!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!}
    </div>
@endif
<p>Welcome, {{ Auth::user()->name }}</p>
<form method="POST" action="/register-device">
    @csrf
    <div class="form-group">
        <label for="device_type">Device Type</label>
        <select class="form-control" id="device_type" name="device_type" required>
            <option value="laptop">Laptop</option>
            <option value="mobile">Mobile</option>
        </select>
    </div>
    <div class="form-group">
        <label for="device_identifier">Device Identifier</label>
        <input type="text" class="form-control" id="device_identifier" name="device_identifier" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Register Device</button>
</form>
@endsection
