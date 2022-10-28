<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;
use App\Models\User;
class SetAttendance extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'stops',
        'starts',
        'user_id',
    ];

    public function Attendance()
    {
        return $this->hasMany(Attendance::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
