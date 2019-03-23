<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hr extends Model
{

    public function events()
    {
        return $this->hasMany('App\Events', 'hr_id', 'id');
    }

    public function roles() {
        return $this->belongsTo('App\Roles');
    }

}
