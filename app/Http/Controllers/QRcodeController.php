<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\SetAttendance;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;


class QRcodeController extends Controller
{
    Public function create($id){
        $id ;
        return view('qrcode.index',compact('id'));
    }
     
    public function attendance()
    {
     
    }
    public function store()
    {

        $set_attendance = $_GET('id') ;
        $user_id = Auth::User()->id;
        $attendance_time = date("Y-m-d H:i:s ");
        $get_set_attendance = SetAttendance::find($set_attendance);

        if ($get_set_attendance->starts < $attendance_time &&  $get_set_attendance->stops > $attendance_time) {
            $status = 'Present';
        } else if ($get_set_attendance->stops < $attendance_time) {
            $status = 'Late';
            # code...
        } else {
            $status = 'Try Dey Calm Down Boss time never reach';
            # code...
        }
        $attendance['set_attendance_id'] = $set_attendance;
        $attendance['user_id'] = $user_id;
        $attendance['status'] = $status;
        if (Attendance::where('set_attendance_id', $attendance['set_attendance_id'])->
           where('user_id', $attendance['user_id'])->count() > 0) {
               # code...
               return redirect('attendances')->withSuccess('Attendance Already Successfully Done!');
        } else{

            Attendance::create([
                'set_attendance_id' => $set_attendance,
                'user_id' => $user_id,
                'status' => $status
                ]);
            return redirect('attendances')->withSuccess('Attendance Successfully Done!');
        }
        // dd($attendance);

        // $request->validate([
               
        //     'set_attendance_id' => ['required', 'max:255'],
        //     'user_id' => ['required', 'max:255'],
        //     'status' => ['required', 'max:255'],

        // ]);
        // $attendance =$request->all();

        //     

        //     CostomerInfo::create($Costomer);

        //     $role = Auth::User()->roles;
        //     if ($role == 'admin'){
        //         return redirect('costomers')->withSuccess('Added Successfully!');

        //     }else{
        //         return redirect('home')->withSuccess('Added Successfully!');

        //     }

    }
}
