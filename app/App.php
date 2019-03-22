<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $table = "apps";
    protected $fillable = array('users_id', 'events_id', 'processes_id', 'apps_statuses_id');
}
