<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hr extends Model
{

    public function events()
    {
        return $this->hasMany('App\Events');
    }

    public function roles() {
        return $this->belongsTo('App\Roles');
    }

}
