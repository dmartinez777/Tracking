<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewStatus extends Model
{
    protected $table = "interview_status";
    protected $fillable = array('name', 'order');
}
