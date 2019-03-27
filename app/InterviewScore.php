<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewScore extends Model
{

    protected $table = "interview_scores";
    protected $fillable = array('hr_id', 'score', 'note');

    public function app()
    {
        return $this->belongsToMany('App\App', 'apps_has_interview_scores', 'interview_scores_id', 'apps_id');
    }

}
