<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hospital',
        'doctor_name',
        'department',
        'symptoms',
        'lap_tests',
        'diagnosis',
        'medicine',
        'prescription',
    ];

    // hasOne user 
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
