<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = "trainings";
    protected $fillable = array('apps_id', 'name', 'organizer', 'year_of_work','cert');

    public function app()
    {
        return $this->belongsTo('App\App');
    }

}
