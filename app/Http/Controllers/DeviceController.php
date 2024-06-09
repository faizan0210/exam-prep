<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeviceController extends Controller
{
    public function deleteDevices(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        foreach ($user->devices as $device) {
            $device->delete();
        }

        return response()->json(['message' => 'Devices deleted successfully']);
    }
}

