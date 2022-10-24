<?php

namespace App\Http\Controllers;
use QRcode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\SetAttendance;

class SetAttendanceController extends Controller
{
    //
    public function index()
    {
        if (Auth::User()) {
            // $role = Auth::User()->roles;
            // if ($role == 'admin'){

            $set_attendances = SetAttendance::all();
            // $roomnum = Room::all()->count();
            // $costomernum = CostomerInfo::all()->count();
            // $roombookingnumber = RoomBooking::all()->count();

            // return $set_attendances;
            return view(
                'set_attendances.index',
                [
                    'set_attendances' => $set_attendances,
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
            // if ($role == 'admin') {


                // return view('set_attendances.create',);
                    $attendancepage =   'http://localhost/attendance-system/courses/editcourse/';
                    QRcode::png($attendancepage);
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
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|unique:set_attendanceinfo',
    //         'meansofid' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'signature' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    //     ]);

    //     $Costomer = $request->all();

    //     $meansofidpath= $request->meansofid->store('images/meansofid');
    //     $Costomer['meansofid'] = $meansofidpath;
    //     $signaturepath= $request->signature->store('images/signature');
    //     $Costomer['signature'] = $signaturepath;


    //     CostomerInfo::create($Costomer);

    //     $role = Auth::User()->roles;
    //     if ($role == 'admin'){
    //         return redirect('set_attendance')->withSuccess('Added Successfully!');

    //     }else{
    //         return redirect('home')->withSuccess('Added Successfully!');

    //     }





    // }

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


    //         $costomer= CostomerInfo::find($id);
    //        // dd($Costomer);
    //         return view('set_attendance.edit')->with('costomer', $costomer); 

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
    //     $Costomer = CostomerInfo::find($id);
    //     $iddestination = $Costomer->meansofid;
    //     $signdestination = $Costomer->signature;
    //     if(Storage::exists($iddestination) ||Storage::exists($signdestination) ){
    //         Storage::delete($iddestination);
    //         Storage::delete($signdestination);
    //     }

    //     $Costomer->delete();


    //     return redirect('set_attendance')->withSuccess('Deleted Successfully!');

    // }
}
