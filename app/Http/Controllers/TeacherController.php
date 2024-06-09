<?php

// app/Http/Controllers/TeacherController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\Device;

class TeacherController extends Controller
{
    public function showLoginForm()
    {
        return view('teacher.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('teacher')->attempt($credentials)) {
            return redirect()->route('teacher.dashboard');
        }

        return redirect()->back()->withErrors(['Invalid credentials']);
    }

    public function dashboard()
    {
        $students = Device::select('user_id')
                          ->with('user')
                          ->groupBy('user_id')
                          ->get();
        return view('teacher.dashboard', compact('students'));
    }

    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher.login');
    }

    public function deleteDevices(Request $request)
    {
        $user_id = $request->input('user_id');
        Device::where('user_id', $user_id)->delete();

        return redirect()->route('teacher.dashboard')->with('success', 'Devices deleted successfully');
    }
}

