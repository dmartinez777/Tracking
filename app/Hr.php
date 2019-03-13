<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hr extends Model
{

    public function events()
    {
        return $this->hasMany('Events');
    }

}
