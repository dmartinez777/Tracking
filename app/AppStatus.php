<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppStatus extends Model
{
    protected $table = "app_statuses";
    protected $fillable = array('name', 'order');
}
