<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected  $fillable = [
    //     'user_id',
    //     'fname',
    //     'lname',
    //     'mname',
    //     'age',
    //     'phone',
    //     'address',
    //     'gender',
    //     'city',
    //     'state',
    //     'country',
    //     'passport',

    // ];  

  //personal model
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //get the user id
    
}
