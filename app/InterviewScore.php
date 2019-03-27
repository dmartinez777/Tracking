<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewScore extends Model
{

    protected $table = "interview_scores";
    protected $fillable = array('hr_id', 'score', 'note');

}
