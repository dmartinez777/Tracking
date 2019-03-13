<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    public function hr()
    {
        return $this->belongsTo('Hr');
    }

}
