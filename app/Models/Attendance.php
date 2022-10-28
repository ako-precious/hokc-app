<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SetAttendance;
use App\Models\User;
class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'user_id',
        'set_attendance_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Setattendance()
    {
        return $this->belongsTo(SetAttendance::class, 'set_attendance_id', 'id');
    }
}
