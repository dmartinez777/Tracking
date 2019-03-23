<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppStatusHistory extends Model
{
    protected $table = 'app_status_histories';
    protected $fillable = array('app_statuses_id', 'apps_id', 'hr_id');

    public function appstatus() {
        return $this->belongsTo('App\AppStatus');
    }

    public function app() {
        return $this->belongsTo('App\App');
    }

    public function hr() {
        return $this->belongsTo('App\Hr');
    }

}
