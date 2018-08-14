<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    Public function users(){
        return $this->belongsToMany(User::class);
    }
}
