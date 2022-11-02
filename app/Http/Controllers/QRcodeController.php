<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\SetAttendance;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;


class QRcodeController extends Controller
{
    public function create($id)
    {
        $id;
        return view('qrcode.create', compact('id'));
    }

    public function attendance($id)
    {
        if (Auth::User()) {
            $set_attendance = $id;
            $user_id = Auth::User()->id;
            $user_name = Auth::User()->name;
            $user_email = Auth::User()->email;
            $attendance_time = date("Y-m-d H:i:s ");
            $get_set_attendance = SetAttendance::find($set_attendance);
            $set_attendance_name = $get_set_attendance->name;
            if ($get_set_attendance->starts < $attendance_time &&  $get_set_attendance->stops > $attendance_time) {
                $status = 'Present';
            } else if ($get_set_attendance->stops < $attendance_time) {
                $status = 'Late';
                # code...
            } else {
                $status = 'Present';
                # code...
            }
            $attendance['set_attendance_name'] = $set_attendance_name;
            $attendance['set_attendance_id'] = $set_attendance;
            $attendance['attendance_time'] = $attendance_time;
            $attendance['user_email'] = $user_email;
            $attendance['user_name'] = $user_name;
            $attendance['user_id'] = $user_id;
            $attendance['status'] = $status;
            // return $attendance;
            return view('qrcode.attendance', ['attendance' => $attendance]);
        } else {
            return redirect('dashboard');
        }
    }
    public function store(Request $request)
    {

        $request->validate([

            'set_attendance_id' => ['required', 'max:255'],
            'user_id' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],

        ]);
        $attendance = $request->all();
        // return($attendance);

        if (Attendance::where('set_attendance_id', $attendance['set_attendance_id'])->where('user_id', $attendance['user_id'])->count() > 0
        ) {
            # code...
            // dd($attendance);
            return redirect('qrcode/status')->withSuccess('Attendance Already Successfully Done!');
        } else {
            // dd($attendance);
            Attendance::create($attendance);
            return redirect('qrcode/status')->withSuccess('Attendance Successfully Done!');
        }
    }

    public function student()
    {
          return "hey";

        // if (Auth::User()) {
        //     $id = Auth::User()->id;
        //     $attendances = Attendance::where('user_id', $id)->get();
        //     return view(
        //         'attendances.student',
        //         ['attendances' => $attendances
        //         ]
        //     );
        // } else {
        //     return redirect('dashboard');
        // }
    }

    Public function studentattendance(){
       return 'this is student attendnace';
        return view('qrcode.status');
    } 
    Public function status(){

        return view('qrcode.status');
    } 
}
