<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewStatus extends Model
{
    protected $table = "interview_status";
    protected $fillable = array('name', 'order');

    public function appinterviewscore()
    {
        return $this->hasMany('App\AppInterviewScore', 'interview_status_id', 'id');
    }

}
