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

}
