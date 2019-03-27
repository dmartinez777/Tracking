<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EduType extends Model
{
    protected $table = "edu_types";
    protected $fillable = array('name', 'level', 'order');

    public function edu()
    {
        return $this->belongsTo('App\Edu');
    }
}
