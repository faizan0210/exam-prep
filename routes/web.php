<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});// View routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/request-device-change', function () {
    return view('request-device-change');
})->middleware('auth')->name('request.device.change');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register-device', [AuthController::class, 'registerDevice'])->middleware('auth');
Route::post('/request-device-change', [AuthController::class, 'requestDeviceChange'])->middleware('auth');
Route::delete('/delete-devices/{userId}', [DeviceController::class, 'deleteDevices'])->middleware('auth');
Route::get('/request-device-change', function () {
    return view('request-device-change');
})->middleware('auth')->name('request.device.change');
Route::post('/request-device-change', [AuthController::class, 'requestDeviceChange'])->middleware('auth');

Route::get('/teacher/login', [TeacherController::class, 'showLoginForm'])->name('teacher.login');
Route::post('/teacher/login', [TeacherController::class, 'login']);
Route::get('/teacher/dashboard', [TeacherController::class, 'dashboard'])->middleware('auth:teacher')->name('teacher.dashboard');
Route::post('/teacher/logout', [TeacherController::class, 'logout'])->middleware('auth:teacher')->name('teacher.logout');
Route::post('/teacher/delete-devices', [TeacherController::class, 'deleteDevices'])->middleware('auth:teacher')->name('teacher.delete.devices');