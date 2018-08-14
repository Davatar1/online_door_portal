<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    protected $fillable=['date','time','event','event_outcome','card_key', 'uwi_id','name'];
}
