<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetAttendance extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'stops',
        'starts',
        'user_id',
    ];
}
