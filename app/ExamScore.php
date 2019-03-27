<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamScore extends Model
{
    protected $table = "exams_scores";
    protected $fillable = array('apps_id', 'exams_id', 'hr_id', 'exams_statuses_id', 'score', 'note');

    public function exam()
    {
        $this->belongsTo('App\Exam');
    }

    public function app()
    {
        $this->belongsTo('App\App');
    }

    public function examstatus()
    {
        $this->belongsTo('App\ExamStatus');
    }

}
