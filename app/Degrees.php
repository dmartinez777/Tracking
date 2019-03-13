<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degrees extends Model
{
    public function events()
    {
        return $this->belongsToMany('App\Events', 'event_degree', 'degree_id', 'event_id');
    }

}
