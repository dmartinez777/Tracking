<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interview extends Model
{
    protected $table = "interviews";
    protected $fillable = array('name', 'processes_id', 'has_scorecard', 'is_active');

    public function appinterviewscore()
    {
        return $this->hasMany('App\AppInterviewScore', 'interview_id', 'id');
    }

}
