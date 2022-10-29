<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\QRcodeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SetAttendanceController;

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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    
    Route::get('/dashboard', [DashboardController::class, "index"] )->name('dashboard');
});

Route::resource('students', UserController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('set_attendances', SetAttendanceController::class);
Route::post('qrcode/store', [QRcodeController::class, "store"])->name('qr_code.store');
Route::get('qrcode/status', [QRcodeController::class, "status"])->name('qr_code.status');
Route::get('qrcode/create/{id}', [QRcodeController::class, "create"])->name('qr_code.create.id');
Route::get('qrcode/attendance/{id}', [QRcodeController::class, "attendance"])->name('qr_code.attendance');