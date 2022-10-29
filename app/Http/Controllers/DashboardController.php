<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\SetAttendance;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        if ($role == 'admin') {
            $setattendancenum = SetAttendance::all()->count();
            $attendancenum = Attendance::all()->count();
            $set_attendances = SetAttendance::all();
            $studentnum = User::all()->count();
            // $year = date('Y');
            // $attendanceratios = Attendance::selectRaw('count(id) as total_bookings, month(created_at) as month')
            //     ->whereYear('created_at', $year)
            //     ->groupBy('month')
            //     ->orderBy('month')
            //     ->get();

            // $attendancelabels = [
            //     1 =>  'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            //     'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
            // ];
            // $bookingsdata = [];
            // $roomsdata = [];
            // $costomerslabels = [];
            // $costomersdata = [];
            // foreach ($bookingratios as $bookingratio) {

            //     $bookingsdata[$bookingratio->month] = $bookingratio->total_bookings;
            // }
            // foreach ($bookingslabels as $month => $name) {
            //     if (!array_key_exists($month, $bookingsdata)) {
            //         $bookingsdata[$month] = 0;
            //     }
            // }
            // ksort($bookingsdata);

            // $roomratios = RoomBooking::selectRaw('count(id) as total_bookings, accomodation as room')
            //     ->groupBy('room')
            //     ->orderBy('room')
            //     ->get();

            // $roomslabels = [
            //     1 =>  'SINGLE ROOM WITH FAN AND FRIDGE',
            //     'SINGLE ROOM WITH A/C', 'SINGLE ROOM WITH A/C & TV',
            //     'CHALET WITH A/C & FRIDGE',
            //     'CHALET WITH A/C, FRIDGE & TV',
            //     'WHITE DOOR CHALET WITH TV A/C & FRIDGE',
            //     'EXECUTIVE SINGLE ROOMS WITH TV (WITH FULL INTERNET SERVICE)',
            // ];

            // foreach ($roomratios as $roomratio) {
            //     $roomsdata[$roomratio->room] = $roomratio->total_bookings;
            // }
            // foreach ($roomslabels as $room => $name) {
            //     if (!array_key_exists($room, $roomsdata)) {
            //         $roomsdata[$room] = 0;
            //     }
            // }
            // ksort($roomsdata);

            $costomerratios = Attendance::selectRaw('count(id) as total_bookings, email as user')
                ->groupBy('user')
                ->orderByDesc('user')
                ->take(8)
                ->get();


            // foreach ($costomerratios as $costomerratio) {
            //     $costomersdata[$costomerratio->user] = $costomerratio->total_bookings;
            //     $costomerslabels[] = $costomerratio->user;
            // }
            // foreach ($costomerslabels as $room => $name) {
            //     if (!array_key_exists($room, $roomsdata)) {
            //         $roomsdata[$room] = 0;
            //     }
            // }
            // return $costomerslabels;

            return view('adminboard',
                [
                    // 'bookingratios' => $bookingratios,
                    'setattendancenum' => $setattendancenum,
                    'set_attendances' => $set_attendances,
                    'attendancenum' => $attendancenum,
                    'studentnum' => $studentnum,
                    // 'rooms' => $rooms,
                    // 'bookingsdata' => array_values($bookingsdata),
                    // 'bookingslabels' => array_values($bookingslabels),
                    // 'costomerslabels' => array_values($costomerslabels),
                    // 'costomersdata' => array_values($costomersdata),
                    // 'roomsdata' => array_values($roomsdata),
                    // 'roomslabels' => array_values($roomslabels),
                ],

            );
        } else {

            $email = Auth::user()->email;

            // if (CostomerInfo::where('email', '=', $email)->first()) {
            //     $costomernum = CostomerInfo::all()->count();
            //     $costomers = CostomerInfo::where('email', '=', $email)->get();

            //     $bookingratios = RoomBooking::where('email', '=', $email)
            //         ->selectRaw('count(email) as total_bookings, month(created_at) as month')
            //         ->whereYear('created_at', 2022)
            //         ->groupBy('month')
            //         ->orderBy('month')
            //         ->get();

            //     $bookingslabels = [
            //         1 =>  'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            //         'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
            //     ];
            //     $bookingsdata = [];


            //     foreach ($bookingratios as $bookingratio) {

            //         $bookingsdata[$bookingratio->month] = $bookingratio->total_bookings;
            //     }
            //     foreach ($bookingslabels as $month => $name) {
            //         if (!array_key_exists($month, $bookingsdata)) {
            //             $bookingsdata[$month] = 0;
            //         }
            //     }
            //     ksort($bookingsdata);
            //     return view(
            //         'mydashboard',
            //         [
            //             'email' => $email,
            //             'costomers' => $costomers,
            //             'bookingratios' => $bookingratios,
            //             'bookingsdata' => array_values($bookingsdata),
            //             'bookingslabels' => array_values($bookingslabels),
            //         ],

            //     );
            // } else {
                $name =   Auth::user()->name;
                $fullname = explode(' ', $name);
                $firstname = $fullname[0];
                $lastname = $fullname[1];


                return view('studentboard', [
                    'email' => $email,
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                ],);
            
        }
    }
}
