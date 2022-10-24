<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
class AttendanceController extends Controller
{
    //
    public function index()
    {
        // $role = Auth::User()->roles;
        // if ($role == 'admin'){
           
            $students = Attendance::all();
            // $roomnum = Room::all()->count();
            // $costomernum = CostomerInfo::all()->count();
            // $roombookingnumber = RoomBooking::all()->count();
            
            // return $students;
            return view('students.index',   
                 ['students'=> $students,
                // 'roomnum'=> $roomnum,
                // 'costomernum'=> $costomernum,
                // 'roombookingnumber'=> $roombookingnumber
                ]
                
            ); 
            
        // }else{
        //     return redirect('home');
    
        // }
    }
   
    // public function create()
    // {
    //     $role = Auth::User()->roles;
    //     if ($role == 'admin'){
           
    
    //         return view('costomers.create',);
            
    //     }else{
    //         return redirect('home');
    
    //     }
     
       
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|unique:costomersinfo',
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
    //         return redirect('costomers')->withSuccess('Added Successfully!');
            
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
