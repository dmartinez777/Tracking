<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = "apps";
    protected $fillable = array('users_id', 'events_id', 'processes_id', 'apps_statuses_id');

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function events() {
        return $this->belongsTo('App\Events');
    }

    public function process() {
        return $this->belongsTo('App\Process');
    }

    public function appstatus() {
        return $this->belongsTo('App\AppStatus');
    }

    public function appstatushistory() {
        return $this->hasMany('App\AppStatusHistory', 'apps_id', 'id');
    }

    public function processhistory() {
        return $this->hasMany('App\ProcessHistory','apps_id', 'id');
    }

    public function skill() {
        return $this->belongsToMany('App\Skill', 'apps_skills', 'apps_id', 'skills_id')
            ->withPivot('levels_id')
            ->withTimestamps();
      }

    public function edu(){
        return $this->hasMany('App\Edu', 'apps_id', 'id');
    }

    public function training(){
        return $this->hasMany('App\Training', 'apps_id', 'id');
    }

    public function interviewscore()
    {
        return $this->belongsToMany('App\InterviewScore', 'apps_has_interview_scores', 'apps_id', 'interview_scores_id')
            ->withPivot('interview_status_id', 'overall_score', 'note')
            ->withTimestamps();
    }

    public function examscore(){
        return $this->hasMany('App\ExamScore', 'apps_id', 'id');
    }

}
