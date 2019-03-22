<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppStatusHistory extends Model
{
    protected $table = 'app_status_histories';
    protected $fillable = array('app_statuses_id', 'apps_id', 'hr_id');
}
