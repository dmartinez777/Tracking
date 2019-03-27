<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamStatus extends Model
{
    protected $table = "exams_statuses";
    protected $fillable = array('name');



}
