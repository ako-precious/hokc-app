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
            // $role = Auth::User()->roles;
            // if ($role == 'admin'){

            $attendances = Attendance::all();
            // $roomnum = Room::all()->count();
            // $costomernum = CostomerInfo::all()->count();
            // $roombookingnumber = RoomBooking::all()->count();
            // // dd(Attendance::find(1)->Users()->orderBy('name')->get());
            //  $attendance = Attendance::find(1);
            //  foreach ($attendance->SetAttendances as $user) {
            //     dd($user);
            // }
            // dd(Attendance::with('Users')->get());
            // dd($attendances);
            return view(
                'attendances.index',
                [
                    'attendances' => $attendances,
                    // 'roomnum'=> $roomnum,
                    // 'costomernum'=> $costomernum,
                    // 'roombookingnumber'=> $roombookingnumber
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
            // if ($role == 'admin'){ 

            $set_attendances = SetAttendance::all();
            $students = User::all();
            return view(
                'attendances.create',
                [
                    'set_attendances' => $set_attendances,
                    'students' => $students,
                ]
            );

            // }else{
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

        // $set_attendance = 1;
        // $user_id = Auth::User()->id;
        // $attendance_time = date("Y-m-d H:i:s ");
        // $get_set_attendance = SetAttendance::find($set_attendance);

        // if ($get_set_attendance->starts < $attendance_time &&  $get_set_attendance->stops > $attendance_time) {
        //     $status = 'Present';
        // } else if ($get_set_attendance->stops < $attendance_time) {
        //     $status = 'Late';
        //     # code...
        // } else {
        //     $status = 'Try Dey Calm Down Boss time never reach';
        //     # code...
        // }
        // $attendance['set_attendance_id'] = $set_attendance;
        // $attendance['user_id'] = $user_id;
        // $attendance['status'] = $status;
        // Attendance::create($attendance);
        // dd($attendance);
        // return $attendance."<br> Successfully registered ";

        $request->validate([
               
            'set_attendance_id' => ['required', 'max:255'],
            'user_id' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],

        ]);
        $attendance =$request->all();
         if (Attendance::where('set_attendance_id', $attendance['set_attendance_id'])->
            where('user_id', $attendance['user_id'])->count() > 0) {
                # code...
                return redirect('attendances')->withSuccess('Attendance Already Successfully Done!');
         } else{

             Attendance::create($attendance);
             return redirect('attendances')->withSuccess('Attendance Successfully Done!');
         }

        //     

        //     CostomerInfo::create($Costomer);

        //     $role = Auth::User()->roles;
        //     if ($role == 'admin'){
        //         return redirect('costomers')->withSuccess('Added Successfully!');

        //     }else{
        //         return redirect('home')->withSuccess('Added Successfully!');

        //     }

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
