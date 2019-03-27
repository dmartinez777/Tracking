<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edu extends Model
{

    protected $table = "edus";
    protected $fillable = array('apps_id', 'edu_types_id', 'school_name', 'major', 'study_program', 'gpa', 'grad_date');

    public function app()
    {
        return $this->belongsTo('App\App');
    }

    public function edutype()
    {
        return $this->hasOne('App\EduType','edu_types_id', 'id');
    }



}
