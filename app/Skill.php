<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    protected $table = "skills";
    protected $fillable = array('name', 'order', 'group');

    public function app() {
        return $this->belongsToMany('App\App', 'apps_skills', 'skills_id', 'apps_id')->withPivot('levels_id');
    }
}
