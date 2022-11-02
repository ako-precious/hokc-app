<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\SetAttendance;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;

class AttendanceController extends Controller
{
    //
    public function index()
    {
        if (Auth::User()) {
            $role = Auth::User()->role;
            if ($role == 'admin') {

                $setattendancenum = SetAttendance::all()->count();
                $attendancenum = Attendance::all()->count();
                $studentnum = User::all()->count();
                $attendances = Attendance::all();

                return view(
                    'attendances.index',
                    [
                        'attendances' => $attendances,
                        'setattendancenum' => $setattendancenum,
                        'attendancenum' => $attendancenum,
                        'studentnum' => $studentnum
                    ]
                );
            } else {
                return redirect('dashboard');
            }
        } else {
            return redirect('dashboard');
        }
    }
    public function student()
    {
        //   return "hey";

        if (Auth::User()) {
            $id = Auth::User()->id;
            $attendances = Attendance::where('user_id', $id)->get();
            return view(
                'attendances.student',
                ['attendances' => $attendances
                ]
            );
        } else {
            return redirect('dashboard');
        }
    }
 

    public function create()
    {
        if (Auth::User()) {
            $role = Auth::User()->role;
            if ($role == 'admin') {

                $set_attendances = SetAttendance::all();
                $students = User::all();
                return view(
                    'attendances.create',
                    [
                        'set_attendances' => $set_attendances,
                        'students' => $students,
                    ]
                );
            } else {
                return redirect('dashboard');
            }
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

        $request->validate([

            'set_attendance_id' => ['required', 'max:255'],
            'user_id' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],

        ]);
        $attendance = $request->all();
        if (
            Attendance::where('set_attendance_id', $attendance['set_attendance_id'])->where('user_id', $attendance['user_id'])->count() > 0
        ) {
            # code...
            return redirect('attendances')->withSuccess('Attendance Already Successfully Done!');
        } else {

            Attendance::create($attendance);
            return redirect('attendances')->withSuccess('Attendance Successfully Done!');
        }
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


        return Attendance::find($id);
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


    //         $costomer= CostomerInfo::find($id);
    //        // dd($Costomer);
    //         return view('costomers.edit')->with('costomer', $costomer); 

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
    //     $Costomer = CostomerInfo::find($id);
    //     $Costomer->update($request->all());

    //     $role = Auth::User()->roles;
    //     if ($role == 'admin'){
    //     return redirect('costomers')->withSuccess('Updated Successfully!');
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
    //     $Costomer = CostomerInfo::find($id);
    //     $iddestination = $Costomer->meansofid;
    //     $signdestination = $Costomer->signature;
    //     if(Storage::exists($iddestination) ||Storage::exists($signdestination) ){
    //         Storage::delete($iddestination);
    //         Storage::delete($signdestination);
    //     }

    //     $Costomer->delete();


    //     return redirect('costomers')->withSuccess('Deleted Successfully!');

    // }
}
