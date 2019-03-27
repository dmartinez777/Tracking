<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppInterviewScore extends Model
{
    protected $table = "apps_has_interview_scores";
    protected $fillable = array('apps_id', 'interview_id', 'interview_scores_id', 'interview_status_id', 'overall_score', 'note');

    public function interviewstatus()
    {
        $this->belongsTo('App\InterviewStatus');
    }

    public function interview()
    {
        $this->belongsTo('App\Interview');
    }

}
