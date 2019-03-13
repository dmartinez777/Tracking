<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function hr()
    {
        return $this->belongsToMany('App\HR');
    }
}
