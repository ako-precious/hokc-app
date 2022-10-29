<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;
use App\Models\SetAttendance;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;

class SetAttendanceController extends Controller
{
    //
    public function index()
    {
        if (Auth::User()) {
            // $role = Auth::User()->roles;
            // if ($role == 'admin'){

            $setattendancenum = SetAttendance::all()->count();
            $attendancenum = Attendance::all()->count();
            $set_attendances = SetAttendance::all();
            $studentnum = User::all()->count();

            // return $set_attendances."br". $set_attendances['id'];
            // return $set_attendances ."br". $student;
            return view(
                'set_attendances.index',
                [
                    'setattendancenum' => $setattendancenum,
                    'set_attendances' => $set_attendances,
                    'attendancenum' => $attendancenum,
                    'studentnum' => $studentnum
                ]

            );

            // }else{
            //     return redirect('home');

            // }
        } else {
            return redirect('dashboard');
        }
    }

    public function create()
    {
        if (Auth::User()) {
            $role = Auth::User()->roles;
            // if ($role == 'admin') {



            // return SetAttendance::latest()->first()->id;
            // QrCode::generate('Make me into a QrCode!');
            return view('set_attendances.create',);
            // } else {
            //     return redirect('home');
            // }
        } else {
            return redirect('dashboard');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = Auth::User()->name;
        $id = Auth::User()->id;
        $request->validate([

            'name' => ['required', 'string', 'max:255', 'unique:set_attendances,name'],
            'starts' => ['required', 'max:255'],
            'stops' => ['required', 'max:255'],

        ]);
        $set_attendance = $request->all();
        $set_attendance['username'] = $name;
        $set_attendance['user_id'] = $id;
        // return $set_attendance;

        SetAttendance::create($set_attendance);
        $id =  SetAttendance::latest()->first()->id;
        // return SetAttendance::latest()->first();
        return redirect()->route('qr_code.create.id', [$id]);
        // return redirect('set_attendances')->withSuccess('Attendance Successfully created!');

    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $role = Auth::User()->roles;
        // if ($role == 'admin'){


        return SetAttendance::find($id);

        // }else{
        //     return redirect('home');

        // }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $role = Auth::User()->roles;
    //     if ($role == 'admin'){


    //         $attendance= attendanceInfo::find($id);
    //        // dd($attendance);
    //         return view('set_attendance.edit')->with('attendance', $attendance); 

    //     }else{
    //         return redirect('home');

    //     }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $attendance = attendanceInfo::find($id);
    //     $attendance->update($request->all());

    //     $role = Auth::User()->roles;
    //     if ($role == 'admin'){
    //     return redirect('set_attendance')->withSuccess('Updated Successfully!');
    //     }else{
    //         return redirect('home')->withSuccess('Updated Successfully!');

    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     // try{

    //     // }catch()
    //     $attendance = attendanceInfo::find($id);
    //     $iddestination = $attendance->meansofid;
    //     $signdestination = $attendance->signature;
    //     if(Storage::exists($iddestination) ||Storage::exists($signdestination) ){
    //         Storage::delete($iddestination);
    //         Storage::delete($signdestination);
    //     }

    //     $attendance->delete();


    //     return redirect('set_attendance')->withSuccess('Deleted Successfully!');

    // }
}
