<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function users(){
        return $this->belongsToMany(User::class);
        
    }
    protected $fillable=['user_id','name','card_key'];
}

