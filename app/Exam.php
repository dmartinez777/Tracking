<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = "exams";
    protected $fillable = array('name', 'max_score', 'max_duration', 'order', 'processes_id', 'is_active');

    public function examscore(){
        return $this->hasMany('App\ExamScore', 'exams_id', 'id');
    }

}
