<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppStatus extends Model
{
    protected $table = "app_statuses";
    protected $fillable = array('name', 'order');

    //$this->hasMany('App\Comment', 'foreign_key', 'local_key');

    public function app()
    {
        return $this->hasMany('App\App', 'apps_statuses_id', 'id');
    }

    public function appstatushistory()
    {
        return $this->hasMany('App\AppStatusHistory', 'app_statuses_id', 'id');
    }

}
