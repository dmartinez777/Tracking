<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewTaken extends Model
{
    protected $table = "interview_taken";
    protected $fillable = array('apps_id', 'interview_id', 'interview_scores_id', 'interview_status_id', 'overall_score', 'note');



}
