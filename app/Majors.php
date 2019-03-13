<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    public function events()
    {
        return $this->belongsToMany('App\Events');
    }
}
