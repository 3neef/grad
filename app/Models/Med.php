<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Med extends Model
{
    use HasFactory;

    protected $guarded = [];

    //medical belongs to one user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
