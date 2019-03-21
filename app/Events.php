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
        return $this->belongsToMany('App\Majors', 'events_majors', 'events_id', 'majors_id');
    }

    public function degrees()
    {
        return $this->belongsToMany('App\Degrees', 'events_degrees', 'events_id', 'degrees_id');
    }

}
