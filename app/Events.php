<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    public function hr()
    {
        return $this->belongsTo('App\Hr');
    }

    public function majors()
    {
        return $this->belongsToMany('App\Majors');
    }

    public function degrees()
    {

    }
}
