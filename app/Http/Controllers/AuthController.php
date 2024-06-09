<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Device;
use App\Models\DeviceChangeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return redirect('login')->withErrors('Login details are not valid');
        }
    }

    public function registerDevice(Request $request)
    {
        $user = Auth::user();
        $deviceType = $request->input('device_type');
        $deviceIdentifier = $request->input('device_identifier');
    
        $deviceCount = Device::where('user_id', $user->id)->count();
    
        if ($deviceCount >= 2) {
            return view('device-limit-reached');
        }
    
        Device::create([
            'user_id' => $user->id,
            'device_type' => $deviceType,
            'device_identifier' => $deviceIdentifier,
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Device registered successfully!');
    }
    

    public function requestDeviceChange(Request $request)
    {
        // Validate the request data
        $request->validate([
            'full_name' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = Auth::user();

        $deviceChangeRequest = new DeviceChangeRequest([
            'user_id' => $user->id,
            'full_name' => $request->full_name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $deviceChangeRequest->save();

        return view('request-sent');
    }
}

