<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;
  
    //medical belongs to one user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
