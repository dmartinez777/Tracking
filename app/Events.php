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
        return $this->belongsToMany('App\Majors', 'event_majors', 'events_id', 'majors_id');
    }

    public function degrees()
    {
        return $this->belongsToMany('App\Degrees', 'event_degrees', 'event_id', 'degree_id');
    }

}
