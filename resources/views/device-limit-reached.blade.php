<!-- resources/views/device-limit-reached.blade.php -->
@extends('layouts.app')

@section('title', 'Device Limit Reached')

@section('content')
<h2>Device Limit Reached</h2>
<p>You can only add your device once. If you want to change the device, you will need to contact your class teacher.</p>
<p><a href="{{ route('request.device.change') }}" class="btn btn-link">Click here to request a device change</a></p>
@endsection
